<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\SeminarTrainingModel;
use Livewire\Component;
use Carbon\Carbon;

#[Layout("layouts.employeePortal")]

class SeminarTrainingPage extends Component
{
   public $searchQuery;
    
    public $trainingSearch = [];

    public function search()
    {
         if (!empty($this->searchQuery)) {
        $this->trainingSearch = SeminarTrainingModel::where('title', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('participants', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('start_date', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('end_date', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('type', 'like', '%' . $this->searchQuery . '%')
            ->get();
        } else {
            // Reset trainings if search query is empty
            $this->reset('trainingSearch');
         }
    
    }
    public function render()
    {
         $trainings = SeminarTrainingModel::paginate(10); 
 
       // $trainings = SeminarTrainingModel::paginate(10); 
        return view('livewire.seminar-training-page',  ['trainings' => $trainings]);
    }
}
