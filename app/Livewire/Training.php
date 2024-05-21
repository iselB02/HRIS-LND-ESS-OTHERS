<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ExperienceModel;

class Training extends Component
{
    public $trainings;

    public $title;
    public $organization;
    public $start_date;
    public $end_date;
    public $location;

    public function mount()
    {
        // Fetch trainings from the database
        $this->trainings = ExperienceModel::all();
    }

     public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
        ]);

        ExperienceModel::create([
            'title' => $this->title,
            'organization' => $this->organization,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'location' => $this->location,
        ]);

        // Refresh the trainings list
        $this->trainings = ExperienceModel::all();

        // Clear the form fields
        $this->reset(['title', 'organization', 'start_date', 'end_date', 'location']);
    }
    public function render()
    {
        return view('livewire.training', [
            'trainings' => $this->trainings,
        ]);
    }
}

