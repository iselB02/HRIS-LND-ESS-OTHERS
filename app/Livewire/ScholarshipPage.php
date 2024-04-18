<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
class ScholarshipPage extends Component
{
    public function render()
    {
        return view('livewire.scholarship-page');
    }
}
