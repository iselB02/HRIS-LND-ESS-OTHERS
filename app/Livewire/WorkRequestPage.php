<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
class WorkRequestPage extends Component
{
    public function render()
    {
        return view('livewire.work-request-page');
    }
}
