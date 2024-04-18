<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.humanResources")]

class AdminComputerAidedTraining extends Component
{
    public function render()
    {
        return view('livewire.admin-computer-aided-training');
    }
}
