<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\OPCRModel;
use Livewire\WithPagination;
use App\Livewire\OpcrPdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Layout("layouts.humanResources")]
class AdminOPCR extends Component
{
    use WithPagination;

    public $employee_id;
    public $searchQuery;
    public $opcrSearch = [];
    public $sortBy = 'created_at'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction
    public function render()
    {
        $this->emp_id = Auth::id();
        $opcrs = OPCRModel::when($this->searchQuery, function ($query) {
            $query->Where('college_department', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('fina_average_rating', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('created_at', 'like', '%' . $this->searchQuery . '%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(6); // Adjust the pagination count as needed
        

        return view('livewire.admin-o-p-c-r', [
            'opcrs' => $opcrs,
        ]);
    }

       // Method to handle sorting
    public function sortData($field, $sortDirection)
       {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
           }
       }

    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->opcrSearch = OPCRModel::Where('college_department', 'like', '%' . $this->searchQuery . '%')
                                            ->orWhere('fina_average_rating', 'like', '%' . $this->searchQuery . '%')
                                            ->orWhere('created_at', 'like', '%' . $this->searchQuery . '%')
                                         ->get();
        } else {
            // Reset opcrSearch if search query is empty
            $this->reset('opcrSearch');
        }
    }
    
    public function download($reference_num)
    {
        // Instantiate the OpcrPdf component to get its content
        $pdfComponent = new OpcrPdf();
        $pdfComponent->mount($reference_num);

        // Get the HTML content of the OpcrPdf component
        $pdfHtml = view('livewire.opcr-pdf', [
            'opcrs' => $pdfComponent->opcrs,
            'department' => $pdfComponent->department,
            'college' => $pdfComponent->college,
            'core_func' => $pdfComponent->core_func,
            'sup_func' => $pdfComponent->sup_func,
        ])->render();

        // Generate PDF using DOMPDF
        $dompdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf->setOptions($options);
        $dompdf->loadHtml($pdfHtml);
        $dompdf->render();

        // Get the PDF content
        $pdfContent = $dompdf->output();

        // Save the PDF content to a temporary file
        $fileName = 'opcr_pdf_' . time() . '.pdf';
        Storage::put($fileName, $pdfContent);

        // Download the generated PDF
        return response()->download(storage_path('app/' . $fileName))->deleteFileAfterSend();
    }
    public function delete($reference_num)
    {
        $item = OPCRModel::where('reference_num', $reference_num);
        if ($item) {
            $item->delete();
        }

    }
}


