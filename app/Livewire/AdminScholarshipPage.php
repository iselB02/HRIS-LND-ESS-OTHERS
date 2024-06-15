<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\ScholarshipModel;

#[Layout("layouts.humanResources")]

class AdminScholarshipPage extends Component
{  
    public $selectedScholarshipId;
    public $selectedScholarship;

    public $searchQuery;
    public $scholarshipSearch = [];

    public $status;
    public $remarks;

    public $sortBy = 'employee_name'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    public function selectScholarship($employee_id)
        {
            $this->selectedScholarshipId = $employee_id;
            $this->selectedScholarship = ScholarshipModel::where('employee_id', $employee_id)->first();
        }

    public function edit($employee_id)
        {
            // Set the selected scholarship ID
            $this->selectedScholarshipId = $employee_id;

            // Optionally, you can load the existing status and remarks from the database
            $this->selectedScholarship = ScholarshipModel::where('employee_id', $employee_id)->first();
            $this->status = $this->selectedScholarship->status;
            $this->remarks = $this->selectedScholarship->remarks;
    //  dd($this->selectedScholarshipId);
        }

    public function updateStatus()
    {
        // Update the status and remarks
        ScholarshipModel::where('employee_id',$this->selectedScholarshipId)->update([
            'status' => $this->status,
            'remarks' => $this->remarks,
        ]);
    
        // Clear the selected scholarship ID after updating
        $this->selectedScholarshipId = null;
    }
    

    public function render()
    {
        $scholars = ScholarshipModel::when($this->searchQuery, function ($query) {
            $query->where('employee_name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('college_department', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('type', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('term', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('units', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('status', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(10); // Adjust the number as needed
        return view('livewire.admin-scholarship-page', ['scholars' => $scholars]);
    }

    public function delete($employee_id)
    {
        $item = ScholarshipModel::where('employee_id', $employee_id)->first();
        if ($item) {
            $item->delete();
        }

    }

    public function sortData($field, $sortDirection)
    {
     if ($this->sortBy === $field) {
         $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
     } else {
         $this->sortBy = $field;
         $this->sortDirection = 'asc';
        }
    }

    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->scholarshipSearch = ScholarshipModel::where('employee_name', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('college_department', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('term', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('units', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('type', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('status', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%')
                                    ->get();
        } else {
            // Reset ipcrSearch if search query is empty
            $this->reset('scholarshipSearch');
        }

    }
    

}
