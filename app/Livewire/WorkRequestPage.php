<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\OvertimeModel;
use App\Models\LeaveModel;
use App\Models\OfficialBusinessModel;
use App\Models\TravelOrderModel;
use Livewire\WithFileUploads;

#[Layout("layouts.employeePortal")]
class WorkRequestPage extends Component
{   
    use WithFileUploads;

    public $officedepartment;
    public $last_name;
    public $first_name;
    public $middle_name;
    public $position;
    public $start_date;
    public $end_date;
    public $reason;

    public $filing_date;
    public $salary;
    public $leave_type;
    public $details_leave;
    public $location;
    public $num_leaves;
    public $commutation;
    public $signature;
    public $destination;
    public $date;
    public $from_time;
    public $to_time;


    public function render()
    {
        return view('livewire.work-request-page');
    }

    public function submit_otForm() {
        $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'position' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required',
        ]);

        
        OvertimeModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'position' => $this->position,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'reason' => $this->reason,
        ]);

        $this->reset();


    }

    public function submit_leaveForm(){

           $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'position' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'filing_date' => 'required|date',
            'salary' => 'required',
            'leave_type' => 'required',
            'details_leave' => 'required',
            'num_leaves' => 'required',
            'commutation' => 'required',
            'signature' => 'required',
        ]);
        
        LeaveModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'position' => $this->position,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'filing_date'=> $this->filing_date,
            'salary'=> $this->salary,
            'leave_type'=> $this->leave_type,
            'details_leave'=> $this->details_leave,
            'location'=> $this->location,
            'num_leaves'=> $this->num_leaves,
            'commutation'=> $this->commutation,
            'signature'=> $this->signature,
        ]);
        $this->reset();
    }


    public function submit_officialBusiness() {
        $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'position' => 'required',
            'destination' => 'required',
            'date' => 'required|date',
            'from_time' => 'required',
            'to_time' => 'required',
            'reason' => 'required',
        ]);
        
        OfficialBusinessModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'position' => $this->position,
            'destination' => $this->destination,
            'date' => $this->date,
            'from_time' => $this->from_time,
            'to_time' => $this->to_time,
            'reason' => $this->reason,
        ]);
        $this->reset();
    }

    public function submit_travelOrder() {
        $this->validate([
            'officedepartment' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'position' => 'required',
            'destination' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required',
        ]);
        
        TravelOrderModel::create([
            'officedepartment' => $this->officedepartment,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'position' => $this->position,
            'destination' => $this->destination,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'reason' => $this->reason,
        ]);
        $this->reset();
    }
}
