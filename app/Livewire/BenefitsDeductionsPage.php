<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class BenefitsDeductionsPage extends Component
{
    public function render()
    {
        return view('livewire.benefits-deductions-page');
    }
}
