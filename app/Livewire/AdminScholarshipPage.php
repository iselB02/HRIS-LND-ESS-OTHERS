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

    public $status;
    public $remarks;

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
        $scholars = ScholarshipModel::paginate(10); // Adjust the number as needed
        return view('livewire.admin-scholarship-page', ['scholars' => $scholars]);
    }

    public function delete($id)
    {
        $item = ScholarshipModel::find($id);
        $item->delete();
    }

}
