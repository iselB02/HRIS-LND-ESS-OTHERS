<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
// Title here
class MyProfilePage extends Component
{
    public function render()
    {
        return view('livewire.my-profile-page');
    }
}
