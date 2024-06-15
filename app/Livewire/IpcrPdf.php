<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\IPCRModel;
use App\Models\IpcrFunctionsModel;
use App\Models\EmployeeModel;
use App\Models\CollegeModel;
use App\Models\DepartmentModel;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout("layouts.employeePortal")]

class IpcrPdf extends Component
{
     public $ipcrs;
    public $employee;
    public $department;
    public $college;

    public $emp_id;

    public $core_func;
    public $sup_func;

public function mount($reference_num)
{
    $this->emp_id = Auth::id();
    $this->ipcrs = IPCRModel::where('reference_num', $reference_num)->first();
	//dd($this->ipcrs->employee_name);
    // Check if IPCR record exists
    if ($this->ipcrs) {
        // Fetch additional data if IPCR record exists
        $this->core_func = IpcrFunctionsModel::where('ipcr_id', $this->ipcrs->reference_num)->where('type', 'core')->get();
        $this->sup_func = IpcrFunctionsModel::where('ipcr_id', $this->ipcrs->reference_num)->where('type', 'sup')->get();

        // Retrieve employee details along with department and college
        $this->employee = EmployeeModel::with('department', 'college')->where('employee_id', $this->emp_id)->first();
        if ($this->employee) {
            $departmentIdString = trim($this->employee->department_id, "[]");
            $extractedDepartmentId = (int) $departmentIdString;
            $this->department = DepartmentModel::where('department_id', $extractedDepartmentId)->first();

            $collegeIdString = trim($this->employee->college_id, "[]");
            $extractedCollegeId = (int) $collegeIdString;
            $this->college = CollegeModel::where('id', $extractedCollegeId)->first();
        }
    }
}


    public function render()
    {
        return view('livewire.ipcr-pdf', [
            'ipcrs' => $this->ipcrs,
            'employee' => $this->employee,
            'department' => $this->department,
            'college' => $this->college,
            'core_func' => $this->core_func,
            'sup_func' => $this->sup_func,
          
        ]);
   
    }
}
