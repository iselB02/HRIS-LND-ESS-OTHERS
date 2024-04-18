<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
class LeaveManagementPage extends Component
{

    public function render()
    {
        return view('livewire.leave-management-page');
    }
}
