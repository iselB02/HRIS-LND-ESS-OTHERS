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

    public function submit_pts_forms() //function for submitting forms on Permit to study
    {
        // $this->validate([
        //     'CoverMemo'=>'required',
        //     'RequestLetter'=>'required',
        //     'PermitToStudy'=>'required',
        //     'TeachingAssignment'=>'required',
        //     'SummaryOfSchedule'=>'required',
        //     'CertificationOfGrades'=>'required',
        //     'StudyPlan'=>'required',
        //     'FacultyEvaluation'=>'required',
        //     'RatedIPCR'=>'required'
        // ]);

        PermitToStudyModel::create([
            'CoverMemo'=>$this->CoverMemo,
            'RequestLetter'=>$this->RequestLetter,
            'PermitToStudy'=>$this->PermitToStudy,
            'TeachingAssignment'=>$this->TeachingAssignment,
            'SummaryOfSchedule'=>$this->SummaryOfSchedule,
            'CertificationOfGrades'=>$this->CertificationOfGrades,
            'StudyPlan'=>$this->StudyPlan,
            'FacultyEvaluation'=>$this->FacultyEvaluation,
            'RatedIPCR'=>$this->RatedIPCR,
        ]);
    }


    


    public function render()
    {
        return view('livewire.permitto-study-page');
    }
}
