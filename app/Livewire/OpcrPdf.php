<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OPCRModel;
use App\Models\OpcrFunctionsModel;
use App\Models\EmployeeModel;
use App\Models\CollegeModel;
use App\Models\DepartmentModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout("layouts.employeePortal")]


class OpcrPdf extends Component
{
    public $opcrs;
    public $employee;
    public $department;
    public $college;
    public $emp_id;
    public $core_func;
    public $sup_func;

    public function mount()
    {
        $this->emp_id = Auth::id();
        $this->opcrs = OPCRModel::where('employee_id', 202410000)->first();
        
        if ($this->opcrs) {
            $this->core_func =OpcrFunctionsModel::where('opcr_id', $this->opcrs->reference_num)->where('type', 'core')->get();
            $this->sup_func = OpcrFunctionsModel::where('opcr_id', $this->opcrs->reference_num)->where('type', 'sup')->get();
            
            $this->employee = EmployeeModel::where('employee_id', 202410000)->first();
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
        return view('livewire.opcr-pdf', [
            'opcrs' => $this->opcrs,
            'employee' => $this->employee,
            'department' => $this->department,
            'college' => $this->college,
            'core_func' => $this->core_func,
            'sup_func' => $this->sup_func,
        ]);
    }
}
