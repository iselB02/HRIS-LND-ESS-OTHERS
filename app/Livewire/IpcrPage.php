<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\IPCRModel;
use App\Models\IpcrFunctionsModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;

#[Layout("layouts.employeePortal")]

class IpcrPage extends Component

{
    public $emp_name;
    public $collegeDepartment;
    public $position;
    public $start_period;
    public $end_period;
    public $type;
    public $coreFunctionRows = [];
    public $supFunctionRows = [];
    public $q;
    public $e;
    public $t;
    public $a;
    public $output;
    public $success_indicators;
    public $actual_accomplishments;
    public $referenceNumber;

    public function mount()
    {
        // Initialize with one empty row
        $this->coreFunctionRows[] = $this->createEmptyRow();
        $this->supFunctionRows[] = $this->createEmptyRow();
    }

    public function generateReferenceNumber()
    {
        // Generate reference number logic
    }

    public function addCoreRow()
    {
        $this->coreFunctionRows[] = $this->createEmptyRow();
    }

    public function addSupRow()
    {
        $this->supFunctionRows[] = $this->createEmptyRow();
    }

    public function removeCoreRow($index)
    {
        unset($this->coreFunctionRows[$index]);
        $this->coreFunctionRows = array_values($this->coreFunctionRows);
    }

    public function removeSupRow($index)
    {
        unset($this->supFunctionRows[$index]);
        $this->supFunctionRows = array_values($this->supFunctionRows);
    }

    public function submitForm()
    {
        // Validate form
        $this->validateForm();

        // Save core function rows
        foreach ($this->coreFunctionRows as $row) {
            ipcrFunctionsModel::create($this->prepareRowForSaving($row));
        }

        // Save sup function rows
        foreach ($this->supFunctionRows as $row) {
            ipcrFunctionsModel::create($this->prepareRowForSaving($row));
        }

        // Reset form fields
        $this->resetFields();
    }

    private function resetFields()
    {
        $this->emp_name = '';
        $this->collegeDepartment = '';
        $this->position = '';
        $this->start_period = '';
        $this->end_period = '';
        $this->type = '';
        $this->coreFunctionRows = [];
        $this->supFunctionRows = [];
    }

    private function validateForm()
    {
        $validator = Validator::make([
            'coreFunctionRows' => $this->coreFunctionRows,
            'supFunctionRows' => $this->supFunctionRows,
        ], [
            'coreFunctionRows.*.q' => 'required|integer|min:1|max:5',
            'coreFunctionRows.*.e' => 'required|integer|min:1|max:5',
            'coreFunctionRows.*.t' => 'required|integer|min:1|max:5',
            'coreFunctionRows.*.a' => 'required|integer|min:1|max:5',
            'supFunctionRows.*.q' => 'required|integer|min:1|max:5',
            'supFunctionRows.*.e' => 'required|integer|min:1|max:5',
            'supFunctionRows.*.t' => 'required|integer|min:1|max:5',
            'supFunctionRows.*.a' => 'required|integer|min:1|max:5',
        ]);

        $validator->validate();
    }

    private function prepareRowForSaving($row)
    {
        return [
            'output' => $row['output'],
            'success_indicators' => $row['success_indicators'],
            'actual_accomplishments' => $row['actual_accomplishments'],
            'q' => $row['q'] ?: null,
            'e' => $row['e'] ?: null,
            't' => $row['t'] ?: null,
            'a' => $row['a'] ?: null,
        ];
    }

    private function createEmptyRow()
    {
        return [
            'output' => '',
            'success_indicators' => '',
            'actual_accomplishments' => '',
            'q' => null,
            'e' => null,
            't' => null,
            'a' => null,
        ];
    }

    public function render()
    {
        return view('livewire.ipcr-page');
    }
}
