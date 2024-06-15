<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\SeminarTrainingModel;
use Livewire\WithPagination;
use Carbon\Carbon;

#[Layout("layouts.humanResources")]
class AdminSeminartrainingPage extends Component
{
    use WithPagination;

    public $id;
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

    public $searchQuery;
    
    public $trainingSearch = [];

    public function add_seminarTraining()
    {
        // Validation
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

        // Create new seminar training
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

        // Reset form fields and pagination
        $this->reset();
        $this->resetPage(); // Reset pagination to the first page after adding a new record
    }

    public function edit($id)
    {
        $training = SeminarTrainingModel::findOrfail($id);
        $this->id = $training->id;
        $this->title = $training->title;
        $this->type = $training->type;
        $this->location = $training->location;
        $this->start_time = $training->start_time;
        $this->end_time = $training->end_time;
        $this->start_date = $training->start_date;
        $this->end_date = $training->end_date;
        $this->description = $training->description;
        $this->participants = $training->participants;
        $this->pre_training = $training->pre_training;
        $this->post_training = $training->post_training;

    }

    public function update()
    {
        $training = SeminarTrainingModel::findOrFail($this->id);
        $training->update([
            'title' => $this->title,
            'type' => $this->type,
            'location' => $this->location,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'description' => $this->description,
            'participants' => $this->participants,
            'pre_training' => $this->pre_training,
            'post_training' => $this->post_training,
        ]);

        session()->flash('message', 'Training updated successfully.');    
        $this->reset();
    }

    
    public function delete($id)
    {
        $item = SeminarTrainingModel::find($id);
        $item->delete();
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
    
        $trainings = SeminarTrainingModel::paginate(10); // Adjust the number as needed
      
   
        return view('livewire.admin-seminartraining-page', ['trainings' => $trainings]);
      
    }
}
