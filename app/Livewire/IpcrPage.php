<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\IPCRModel;
use App\Models\IpcrFunctionsModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Livewire\IpcrPdf;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;


#[Layout("layouts.employeePortal")]

class IpcrPage extends Component

{
    use WithFileUploads;

    public $emp_name;
    public $collegeDepartment;
    public $position;
    public $start_period;
    public $end_period;
    public $department_head;
    public $type;
    public $status = 'Pending';
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
    public $filing_date;
    public $signature;
    public $certified_by;
    public $certification_date;
    public $appBy;
    public $app_date;
    public $application_form;
    public $final_rating;
    public $comments_reco;
    public $emp_id;

    public $total;
    public $rating;

    public $core_func = [];
    public $sup_func = [];
    public $ipcrs;

    public function mount()
    {
        $this->emp_id = Auth::id();
        // Initialize with one empty row
        $this->coreFunctionRows[] = $this->createEmptyRow();
        $this->supFunctionRows[] = $this->createEmptyRow();
        $this->generateReferenceNumber();
        // dd($this->ipcrs);
        
        $this->ipcrs = IPCRModel::where('employee_id', $this->emp_id)->get();
    }

    public function calculateRating()
    {
        $coreA = 0;
        $supA = 0;
        $totalCore = count($this->coreFunctionRows);
        $totalSup = count($this->supFunctionRows);

        foreach ($this->coreFunctionRows as $row) {
            $coreA += $row['a'];
        }

        foreach ($this->supFunctionRows as $row) {
            $supA += $row['a'];
        }

        $averageCore = $totalCore > 0 ? ($coreA / $totalCore) * 0.80 : 0;
        $averageSup = $totalSup > 0 ? ($supA / $totalSup) * 0.20 : 0;
        $this->total = $averageCore + $averageSup;

        if ($this->total >= 4.5) {
            $this->rating = 'Outstanding';
        } elseif ($this->total >= 3.5) {
            $this->rating = 'Very Satisfactory';
        } elseif ($this->total >= 2.5) {
            $this->rating = 'Satisfactory';
        } elseif ($this->total >= 1.5) {
            $this->rating = 'Unsatisfactory';
        } else {
            $this->rating = 'Poor';
        }
    }

    public function generateReferenceNumber()
    {
        // Get current date in Ymd format
        $date = date('Ymd');
        
        // Generate 5 random digits
        $randomDigits = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
       
        // Concatenate date and random digits to form the reference number
        $this->referenceNumber = $date . $randomDigits;
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
            IpcrFunctionsModel::create($this->prepareRowForSaving($row, $type='core'));
        }

        // Save sup function rows
        foreach ($this->supFunctionRows as $row) {
            IpcrFunctionsModel::create($this->prepareRowForSaving($row, $type='sup'));
        }

        // Calculate rating and total
        $this->calculateRating();

        // Save the main IPCR data
        IPCRModel::create([
            'employee_id' => $this->emp_id,
            'reference_num' => $this->referenceNumber,
            'status' => $this->status,
            'final_average_rating' =>$this->total,
            'ipcr_type' => $this->type,
            'employee_name' => $this->emp_name,
            'date_of_filling' => $this->filing_date,
            'position' => $this->position,
            'start_period' => $this->start_period,
            'end_period' => $this->end_period,
            'ratee' => $this->department_head,
            'comments_and_reco' => $this->comments_reco,
            'discussed_with' => $this->signature,
            'disscused_with_date' => $this->filing_date,
            'application_form' => $this->application_form,
        ]);

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
            'coreFunctionRows.*.output' => 'required|string|min:10|max:255',
            'coreFunctionRows.*.success_indicators' => 'required|string|min:10|max:255',
            'coreFunctionRows.*.actual_accomplishments' => 'required|string|min:10|max:255',
            'coreFunctionRows.*.q' => 'nullable|integer|min:1|max:5',
            'coreFunctionRows.*.e' => 'nullable|integer|min:1|max:5',
            'coreFunctionRows.*.t' => 'nullable|integer|min:1|max:5',
            'coreFunctionRows.*.a' => 'required|integer|min:1|max:5',
            'supFunctionRows.*.output' => 'required|string|min:10|max:255',
            'supFunctionRows.*.success_indicators' => 'required|string|min:10|max:255',
            'supFunctionRows.*.actual_accomplishments' => 'required|string|min:10|max:255',
            'supFunctionRows.*.q' => 'nullable|integer|min:1|max:5',
            'supFunctionRows.*.e' => 'nullable|integer|min:1|max:5',
            'supFunctionRows.*.t' => 'nullable|integer|min:1|max:5',
            'supFunctionRows.*.a' => 'required|integer|min:1|max:5',
        ]);

        $validator->validate();
    }

    private function prepareRowForSaving($row, $type)
    {
        return [
            'type' => $type,
            'ipcr_id' => $this->referenceNumber,
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

    
    public function download()
    {
        // Instantiate the IpcrPdf component to get its content
        $pdfComponent = new IpcrPdf();
        $pdfComponent->mount();

        // Get the HTML content of the IpcrPdf component
        $pdfHtml = view('livewire.ipcr-pdf', [
            'ipcrs' => $pdfComponent->ipcrs,
            'employee' => $pdfComponent->employee,
            'department' => $pdfComponent->department,
            'college' => $pdfComponent->college,
            'core_func' => $pdfComponent->core_func,
            'sup_func' => $pdfComponent->sup_func,
        ])->render();

        // Generate PDF using DOMPDF
        $dompdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf->setOptions($options);
        $dompdf->loadHtml($pdfHtml);
        $dompdf->render();

        // Get the PDF content
        $pdfContent = $dompdf->output();

        // Save the PDF content to a temporary file
        $fileName = 'ipcr_pdf_' . time() . '.pdf';
        Storage::put($fileName, $pdfContent);

        // Download the generated PDF
        return response()->download(storage_path('app/' . $fileName))->deleteFileAfterSend();
    }
    public function render()
    {
        return view('livewire.ipcr-page', ['ipcrId' => $this->referenceNumber]);
    }
}
