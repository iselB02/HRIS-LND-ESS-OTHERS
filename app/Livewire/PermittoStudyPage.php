<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class PermittoStudyPage extends Component
{
    public function render()
    {
        return view('livewire.permitto-study-page');
    }
}
