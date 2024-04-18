<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
// Title here
class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.dashboard-page');
    }
}
