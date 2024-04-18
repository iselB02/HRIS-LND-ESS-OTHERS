<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.humanResources")]

class AdminPermittoStudyPage extends Component
{
    public function render()
    {
        return view('livewire.admin-permitto-study-page');
    }
}
