<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\IPCRModel;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("layouts.employeePortal")]

class IpcrPage extends Component

{

    public function render()
    {
        return view('livewire.ipcr-page');
    }
}
