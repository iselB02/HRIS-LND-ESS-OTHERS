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
    public $type;
    public $address;
    public $postal_code;
    public $civil_status;
    public $position;
    public $course;
    public $term;
    public $units;
    public $start_date;
    public $end_date;
    public $school_name;
    public $school_address;

    public $status = 'Pending for Approval';
    public $remarks;

    public function submit_scholarship() {
        $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'type' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'civil_status' => 'required',        
            'position' => 'required',
            'course' => 'required',
            'start_date' => 'required',
            'term' => 'required',
            'units' => 'required',
            'end_date' => 'required',
            'school_name' => 'required',
            'school_address' => 'required',
        ]);
        
        ScholarshipModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'type' => $this->type,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'civil_status'=> $this->civil_status,        
            'position'=> $this->position,
            'course'=> $this->course,
            'term'=> $this->term,
            'units' => $this->units,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'school_name' => $this->school_name,
            'school_address' => $this->school_address,
            'status' => $this->status,
            'remarks' => $this->remarks,
        ]);
        session()->flash('message', 'Form submitted successfully!');
        $this->reset();
    }

    public function delete($id)
    {
        $item = ScholarshipModel::find($id);
        $item->delete();
        session()->flash('message', 'Form deletedsuccessfully!');
    }

    public function render()
    {
        $scholars = ScholarshipModel::paginate(10); // Adjust the number as needed
        return view('livewire.scholarship-page', ['scholars' => $scholars]);
    }
}

