<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class EmployeeCourses extends Component
{
    public function render()
    {
        return view('livewire.employee-courses');
    }
}
