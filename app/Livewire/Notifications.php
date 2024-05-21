<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SeminarTrainingModel;

class Notifications extends Component
{
    public $trainings;

    public function mount() {
        $this->trainings = SeminarTrainingModel::all();
    }
    public function render()
    {
        return view('livewire.notifications');
    }
}
