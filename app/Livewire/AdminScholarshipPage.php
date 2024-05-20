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

    public $sortBy = 'first_name'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    public function selectScholarship($id)
    {
        $this->selectedScholarshipId = $id;
        $this->selectedScholarship = ScholarshipModel::findOrFail($id);
    }

    public function edit($id)
    {
        // Set the selected scholarship ID
        $this->selectedScholarshipId = $id;

        // Optionally, you can load the existing status and remarks from the database
        $scholarship = ScholarshipModel::findOrFail($id);
        $this->status = $scholarship->status;
        $this->remarks = $scholarship->remarks;
    }

    public function updateStatus()
    {
        // Update the status and remarks
        ScholarshipModel::where('id', $this->selectedScholarshipId)
            ->update([
                'status' => $this->status,
                'remarks' => $this->remarks,
            ]);

        // Clear the selected scholarship ID after updating
        $this->selectedScholarshipId = null;
    }

    public function render()
    {
        $scholars = ScholarshipModel::when($this->searchQuery, function ($query) {
            $query->where('first_name', 'like', '%' . $this->searchQuery . '%')
                  ->orwhere('middle_name', 'like', '%' . $this->searchQuery . '%')
                  ->orwhere('last_name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('type', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('status', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(10); // Adjust the number as needed
        return view('livewire.admin-scholarship-page', ['scholars' => $scholars]);
    }

    public function delete($id)
    {
        $item = ScholarshipModel::find($id);
        $item->delete();
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
            $this->scholarshipSearch = ScholarshipModel::where('first_name', 'like', '%' . $this->searchQuery . '%')
                                    ->orwhere('middle_name', 'like', '%' . $this->searchQuery . '%')
                                    ->orwhere('last_name', 'like', '%' . $this->searchQuery . '%')
                                    ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
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
