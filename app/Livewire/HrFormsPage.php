<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class HrFormsPage extends Component
{
    public function render()
    {
        return view('livewire.hr-forms-page');
    }
}
