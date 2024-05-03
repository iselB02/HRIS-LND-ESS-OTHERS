<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class CourseVideo extends Component
{
    public function render()
    {
        return view('livewire.course-video');
    }
}
