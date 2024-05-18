<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\SeminarTrainingModel;

#[Layout("layouts.employeePortal")]
class AnnouncementsPage extends Component
{
    public $trainings;

    public function mount() {
        $this->trainings = SeminarTrainingModel::all();
    }

    public function render()
    {
        return view('livewire.announcements-page', ['trainings' => $this->trainings]);
    }
}