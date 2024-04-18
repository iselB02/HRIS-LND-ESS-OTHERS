<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class SeminarTrainingPage extends Component
{
    public function render()
    {
        return view('livewire.seminar-training-page');
    }
}
