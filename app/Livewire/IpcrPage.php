<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\IPCRModel;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("layouts.employeePortal")]

class IpcrPage extends Component

{
    use WithFileUploads;
    Public $officedepartment;
    Public $average;

    public $name;

    public $position;
    Public $application_form;
    public function submit_ipcrForm() {
        $this->validate([
            'officedepartment' => 'required',
            'average' => 'required',
            'name' => 'required',
            'position' => 'required',
            'application_form' => 'required',
        ]);

        IPCRModel::create([
            'officedepartment' => $this->officedepartment,
            'average' => $this->average,
            'name' => $this->name,
            'position' => $this->position,
            'application_form' => $this->application_form,
        ]);

        $this->reset();

    }

    public function render()
    {
        return view('livewire.ipcr-page');
    }
}
