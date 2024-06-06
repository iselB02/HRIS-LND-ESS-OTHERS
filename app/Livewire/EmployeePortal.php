<?php

namespace App\View\Components;


use Livewire\Component;
use App\Models\EmployeeModel;
use Illuminate\View\View;

class EmployeePortal extends Component
{
    public $emp_id = 202410000;
    public $employee;

    public function mount(EmployeeModel $employeeModel) {
        $this->employee = $employeeModel->where('employee_id', $this->emp_id)->first();
        dd($this->employee);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('livewire.layouts.employeePortal', [
            'employee' => $this->employee,
        ]);
    }
}
