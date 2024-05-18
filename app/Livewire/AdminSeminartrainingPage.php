<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\SeminarTrainingModel;

#[Layout("layouts.humanResources")]

class AdminSeminartrainingPage extends Component
{
    public $title;
    public $type;
    public $location;
    public $start_time;
    public $end_time;
    public $start_date;
    public $end_date;
    public $description;
    public $participants;
    public $pre_training;
    public $post_training;
    public function add_seminarTraining() {
        $this->validate([
            'title' => 'required',
            'type' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'start_date' => 'required|date',
            'description' => 'required',
            'participants' => 'required',
            'pre_training' => 'required',
            'post_training' => 'required',
        ]);

        
        SeminarTrainingModel::create([
            'title' => $this->title,
            'type' => $this->type,
            'location' => $this->location,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'description' => $this->description,
            'participants' => $this->participants,
            'pre_training' => $this->pre_training,
            'post_training' => $this->post_training,
        ]);


    
        $this->reset();


    }

    public $trainings=[];

    public function mount()
    {
        // Fetch all users from the database
        $this->trainings = SeminarTrainingModel::all();
    }

    public function checkEmptyFields()
    {
        $emptyFields = [];

        if (empty($this->title)) {
            $emptyFields[] = 'title';
        }
        if (empty($this->type)) {
            $emptyFields[] = 'type';
        }
        // Add other fields here...

        $this->highlightedFields = $emptyFields;
    }
    public function render()
    {
        return view('livewire.admin-seminartraining-page');
    }
}
