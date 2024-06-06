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

    public function mount()
    {
        $this->emp_id = Auth::id();
        $this->ipcrs = IPCRModel::where('employee_id', $this->emp_id)->first();
        
        if ($this->ipcrs) {
            $this->core_func = IpcrFunctionsModel::where('ipcr_id', $this->ipcrs->reference_num)->where('type', 'core')->get();
            $this->sup_func = IpcrFunctionsModel::where('ipcr_id', $this->ipcrs->reference_num)->where('type', 'sup')->get();
            
            $this->employee = EmployeeModel::where('employee_id', $this->emp_id)->first();
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
