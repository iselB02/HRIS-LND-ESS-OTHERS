<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\EmployeeModel;
use App\Models\PermitToStudyModel;
use App\Models\DepartmentModel;
use App\Models\CollegeModel;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

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
    public $employee;
    public $emp_id;
   	public $referenceNum;

    protected $rules = [
        'CoverMemo' => 'nullable|file|mimes:pdf',
        'RequestLetter' => 'nullable|file|mimes:pdf',
        'PermitToStudy' => 'nullable|file|mimes:pdf',
        'TeachingAssignment' => 'nullable|file|mimes:pdf',
        'SummaryOfSchedule' => 'nullable|file|mimes:pdf',
        'CertificationOfGrades' => 'nullable|file|mimes:pdf',
        'StudyPlan' => 'nullable|file|mimes:pdf',
        'FacultyEvaluation' => 'nullable|file|mimes:pdf',
        'RatedIPCR' => 'nullable|file|mimes:pdf',
    ];

    public function submit_pts_forms()
    {
        // Validate the form inputs against the rules
        $this->validate();

        // Get the authenticated user ID
        $this->emp_id = Auth::id();
      
    //   // Check for non-PDF files
    //     foreach ($validatedData as $key => $file) {
    //         if ($file && $file->getClientOriginalExtension() !== 'pdf') {
    //             throw ValidationException::withMessages([$key => 'The ' . $key . ' must be a PDF file.']);
    //         }
    //     }

      	$this->generateReferenceNumber();
        // Fetch employee details with related department and college
        $this->employee = EmployeeModel::with(['department', 'college'])
                                        ->where('employee_id', $this->emp_id)
                                        ->first();

        if ($this->employee) {
            $departmentIdString = trim($this->employee->department_id, "[]");
            $extractedDepartmentId = (int) $departmentIdString;
            $this->department = DepartmentModel::where('department_id', $extractedDepartmentId)->first();

            $collegeIdString = trim($this->employee->college_id, "[]");
            $extractedCollegeId = (int) $collegeIdString;
            $this->college = CollegeModel::where('id', $extractedCollegeId)->first();

            $officedepartment = $this->department ? $this->department->department_name : null;
        }

        // Store the files and create a new record in the database
        PermitToStudyModel::create([
          	'reference_num' => $this->referenceNum,
            'id' => $this->emp_id,
            'name' => $this->employee->first_name . ' ' . $this->employee->middle_name . ' ' . $this->employee->last_name,
            'officedepartment' => $officedepartment,
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
      
     // Clear the fields after submission
        $this->resetFields();
      
       // Dispatch browser event to trigger page refresh
       // $this->dispatchBrowserEvent('formSubmitted');
      

    }
  
    public function generateReferenceNumber()
    {
        // Get current date in Ymd format
        $date = date('Ymd');
        
        // Generate 5 random digits
        $randomDigits = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
       
        // Concatenate date and random digits to form the reference number
        $this->referenceNum = $date . $randomDigits;
    }
          
   

    private function resetFields()
    {
        $this->CoverMemo = null;
        $this->RequestLetter = null;
        $this->PermitToStudy = null;
        $this->TeachingAssignment = null;
        $this->SummaryOfSchedule = null;
        $this->CertificationOfGrades = null;
        $this->StudyPlan = null;
        $this->FacultyEvaluation = null;
        $this->RatedIPCR = null;
        $this->employee = null;
        $this->emp_id = null;
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
