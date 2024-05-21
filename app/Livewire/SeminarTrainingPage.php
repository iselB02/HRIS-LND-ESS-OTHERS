<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\SeminarTrainingModel;
use Livewire\Component;

#[Layout("layouts.employeePortal")]

class SeminarTrainingPage extends Component
{
    public $searchQuery;
    
    public $trainingSearch = [];
    public $trainings=[];

    public function mount()
    {
        // Fetch all users from the database
        $this->trainings = SeminarTrainingModel::all();
    }

    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->trainingSearch = SeminarTrainingModel::where('title', 'like', '%' . $this->searchQuery . '%')
            ->orwhere('participants', 'like', '%' . $this->searchQuery . '%')
            ->orwhere('start_date', 'like', '%' . $this->searchQuery . '%')
            ->orwhere('end_date', 'like', '%' . $this->searchQuery . '%')
            ->orwhere('type', 'like', '%' . $this->searchQuery . '%')
            ->get();
        } else {
            // Reset trainings if search query is empty
            $this->reset('trainingSearch');
            $this->render(); 
        }
    }
    public function render()
    {
        return view('livewire.seminar-training-page');
    }
}
