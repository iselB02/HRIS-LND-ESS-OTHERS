<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\ScholarshipModel;
use App\Models\EmployeeModel;
use App\Models\DepartmentModel;
use App\Models\CollegeModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

#[Layout("layouts.employeePortal")]
class ScholarshipPage extends Component
{
    public $collegeDepartment;
    public $emp_name;
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
    public $emp_id;
	public $employee;
    public $status = 'Pending for Approval';
    public $remarks;
  
	public $departments = [];
  	public $colleges = [];
  	
  	public function mount() {
      
      
      	$this->emp_id = Auth::id();
      
    	// Fetch the employee details
    	$this->employee = EmployeeModel::where('employee_id', $this->emp_id)->first();
      
      	$this->emp_name = $this->employee->first_name . ' ' . $this->employee->middle_name . ' ' . $this->employee->last_name;
      	$this->address = $this->employee->address;
     	$this->civil_status = $this->employee->civil_status;
     	$this->position = $this->employee->current_position;
      	//dd($this->position);
      
      if ($this->employee) {
        // Extract department IDs as an array
        $departmentIds = explode(',', trim($this->employee->department_id, "[]"));

        // Convert each element to an integer
        $extractedDepartmentIds = array_map('intval', $departmentIds);
        
        // Fetch department details for each department ID
        $this->departments = DepartmentModel::whereIn('department_id', $extractedDepartmentIds)->get(['department_id', 'department_name']);

        // Extract college IDs as an array
        $collegeIds = explode(',', trim($this->employee->college_id, "[]"));
                
        // Convert each element to an integer
        $extractedCollegesIds = array_map('intval', $collegeIds);
        
        // Fetch college details for each college ID
        $this->colleges = CollegeModel::whereIn('id', $extractedCollegesIds)->get(['id', 'college_name']);
         $this->render();
    }
    }

    public function submit_scholarship() {
        $this->validate([
            'collegeDepartment' => 'required',
            'type' => 'required',        
            'course' => 'required',
            'start_date' => 'required',
            'term' => 'required',
            'units' => 'required',
            'end_date' => 'required',
            'school_name' => 'required',
            'school_address' => 'required',
        ]);
        
        ScholarshipModel::create([
            'employee_id'=>$this->emp_id,
           // 'employee' => $this->emp_id,  
            'college_department' => $this->collegeDepartment,
            'employee_name' => $this->emp_name,
            'type' => $this->type,
            'address' => $this->address,
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
     // dd($this->position);
        session()->flash('message', 'Form submitted successfully!');
        $this->reset();
        $this->mount();
    }

    public function delete()
    {
        
        $item = ScholarshipModel::find($this->emp_id);
        $item->delete();
        session()->flash('message', 'Form deletedsuccessfully!');
       $this->render();
    }

    public function render()
    {	
      	
        $scholars = ScholarshipModel::where('employee_id', $this->emp_id    )->paginate(10); // Adjust the number as needed
        return view('livewire.scholarship-page', ['scholars' => $scholars]);
    }
}

