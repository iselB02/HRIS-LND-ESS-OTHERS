<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\IPCRModel;

#[Layout("layouts.humanResources")]
class AdminIPCRPage extends Component
{
    public $ipcrs = [];
    public $pdfBlob;

    public function mount() {
        // Fetch all records from the IPCRModel
        $this->ipcrs = IPCRModel::all();
        // dd($this->ipcrs);

        // Fetch the PDF Blob data from your backend
        //$this->pdfBlob = IPCRModel::fetchPdfBlob(); // Implement this method in your PdfService

        

    }   

  
    public function render()
    {
        return view('livewire.admin-ipcr-page');
    }
}
