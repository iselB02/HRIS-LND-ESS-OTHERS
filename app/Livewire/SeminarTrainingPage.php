<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\SeminarTrainingModel;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class SeminarTrainingPage extends Component
{
    public $trainings=[];

    public function mount()
    {
        // Fetch all users from the database
        $this->trainings = SeminarTrainingModel::all();
    }
    public function render()
    {
        return view('livewire.seminar-training-page');
    }
}
