<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

use App\Models\PermitToStudyModel;
use Livewire\WithFileUploads;

#[Layout("layouts.employeePortal")]

class PermittoStudyPage extends Component
{

    use WithFileUploads;

    public $CoverMemo;
    public $RequestLetter;
    public $PermitToStudy;
    public $TeachingAssignment;
    public $SummaryOfSchedule;
    public $CertificationOfGrades;
    public $StudyPlan;
    public $FacultyEvaluation;
    public $RatedIPCR;

    protected $rules = [
        'CoverMemo' => 'nullable|file|mimes:pdf,doc,docx',
        'RequestLetter' => 'nullable|file|mimes:pdf,doc,docx',
        'PermitToStudy' => 'nullable|file|mimes:pdf,doc,docx',
        'TeachingAssignment' => 'nullable|file|mimes:pdf,doc,docx',
        'SummaryOfSchedule' => 'nullable|file|mimes:pdf,doc,docx',
        'CertificationOfGrades' => 'nullable|file|mimes:pdf,doc,docx',
        'StudyPlan' => 'nullable|file|mimes:pdf,doc,docx',
        'FacultyEvaluation' => 'nullable|file|mimes:pdf,doc,docx',
        'RatedIPCR' => 'nullable|file|mimes:pdf,doc,docx',
    ];

    public function submit_pts_forms() //function for submitting forms on Permit to study
    {
        // Validate the form inputs against the rules
        $this->validate();

        // Store the files and create a new record in the database
        PermitToStudyModel::create([
            'CoverMemo' => $this->CoverMemo ? $this->CoverMemo->store('CoverMemo') : null,
            'RequestLetter' => $this->RequestLetter ? $this->RequestLetter->store('RequestLetter') : null,
            'PermitToStudy' => $this->PermitToStudy ? $this->PermitToStudy->store('PermitToStudy') : null,
            'TeachingAssignment' => $this->TeachingAssignment ? $this->TeachingAssignment->store('TeachingAssignment') : null,
            'SummaryOfSchedule' => $this->SummaryOfSchedule ? $this->SummaryOfSchedule->store('SummaryOfSchedule') : null,
            'CertificationOfGrades' => $this->CertificationOfGrades ? $this->CertificationOfGrades->store('CertificationOfGrades') : null,
            'StudyPlan' => $this->StudyPlan ? $this->StudyPlan->store('StudyPlan') : null,
            'FacultyEvaluation' => $this->FacultyEvaluation ? $this->FacultyEvaluation->store('FacultyEvaluation') : null,
            'RatedIPCR' => $this->RatedIPCR ? $this->RatedIPCR->store('RatedIPCR') : null,
        ]);
    }


    public $records = [];
    public function getPermitToStudyRecords()
    {
        $this->records = PermitToStudyModel::all();
    }

    public function render()
    {
        return view('livewire.permitto-study-page');
    }
}
