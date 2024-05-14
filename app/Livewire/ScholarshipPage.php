<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\ScholarshipModel;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
class ScholarshipPage extends Component
{
    public $officedepartment;
    public $last_name;
    public $first_name;
    public $middle_name;
    public $address;
    public $postal_code;
    public $civil_status;
    public $position;
    public $course;
    public $start_date;
    public $end_date;
    public $school_name;
    public $school_address;

    public function submit_scholarship() {
        $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'civil_status' => 'required',        
            'position' => 'required',
            'course' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'school_name' => 'required',
            'school_address' => 'required',
        ]);
        
        ScholarshipModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'civil_status'=> $this->civil_status,        
            'position'=> $this->position,
            'course'=> $this->course,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'school_name' => $this->school_name,
            'school_address' => $this->school_address,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.scholarship-page');
    }
}
