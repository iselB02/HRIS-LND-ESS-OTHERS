<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class AttendancePage extends Component
{
    public function render()
    {
        return view('livewire.attendance-page');
    }
}
