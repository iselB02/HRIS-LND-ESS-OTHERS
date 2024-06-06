<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\IPCRModel;
use Livewire\WithPagination;
use App\Livewire\IpcrPdf;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Layout("layouts.humanResources")]
class AdminIPCRPage extends Component
{
    use WithPagination;

    public $searchQuery;
    public $ipcrSearch = [];
    public $sortBy = 'employee_name'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    public function render()
    {
        $ipcrs = IPCRModel::when($this->searchQuery, function ($query) {
            $query->where('employee_name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('position', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('date_of_filing', 'like', '%' . $this->searchQuery . '%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(6); // Adjust the pagination count as needed
        
        return view('livewire.admin-ipcr-page', [
            'ipcrs' => $ipcrs,
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
            $this->ipcrSearch = IPCRModel::where('employee_name', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('position', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%')
                                         ->get();
        } else {
            // Reset ipcrSearch if search query is empty
            $this->reset('ipcrSearch');
        }
    }
    
    public function download()
    {
        // Instantiate the IpcrPdf component to get its content
        $pdfComponent = new IpcrPdf();
        $pdfComponent->mount();

        // Get the HTML content of the IpcrPdf component
        $pdfHtml = view('livewire.ipcr-pdf', [
            'ipcrs' => $pdfComponent->ipcrs,
            'employee' => $pdfComponent->employee,
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
        $fileName = 'ipcr_pdf_' . time() . '.pdf';
        Storage::put($fileName, $pdfContent);

        // Download the generated PDF
        return response()->download(storage_path('app/' . $fileName))->deleteFileAfterSend();
    }
    public function delete($reference_num)
    {
        $item = IPCRModel::where('reference_num', $reference_num);
        if ($item) {
            $item->delete();
        }

    }

}


