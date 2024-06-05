<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\OPCRModel;
use Livewire\WithPagination;
use App\Livewire\OpcrPdf;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Layout("layouts.humanResources")]
class AdminOPCR extends Component
{
    use WithPagination;

    public $searchQuery;
    public $opcrSearch = [];
    public $sortBy = 'created_at'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction
    public function render()
    {
        $opcrs = OPCRModel::when($this->searchQuery, function ($query) {
            $query->Where('position', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('date_of_filing', 'like', '%' . $this->searchQuery . '%');
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
            $this->opcrSearch = OPCRModel::Where('position', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%')
                                         ->get();
        } else {
            // Reset opcrSearch if search query is empty
            $this->reset('opcrSearch');
        }
    }
    
    public function download()
    {
        // Instantiate the OpcrPdf component to get its content
        $pdfComponent = new OpcrPdf();
        $pdfComponent->mount();

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
    public function delete($id)
    {
        $item = OPCRModel::find($id);
        $item->delete();
    }
}


