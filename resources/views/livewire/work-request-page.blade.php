<div class="workreq-container">
    <div class="banner">
        <img id="banner_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 class="banner_h1">Work Request Service</h1>
    </div>
    <div class="button-container">
        <div class="col2">
            <div id="overTime">
                <img src="{{ asset('images/wall-clock.png') }}" alt="wall_clock_icon">
                <h1>Over Time</h1>
            </div>
            <div id="officialBusiness">
                <img src="{{ asset('images/paperwork.png') }}" alt="paperwork_icon">
                <h1>Official Business</h1>
            </div>
            <div id="travelOrder">
                <img src="{{ asset('images/suitcase.png') }}" alt="suitcase_icon">
                <h1>Travel Order</h1>
            </div>
        </div>
    </div>
        <!-- Overtime Form -->
        <div id="overtime-form">
            <h1 class="form-heading">Application for Overtime</h1>
            <form wire:submit.prevent="submit_otForm">
                @csrf
                <div class="otForm">
                    <div class="ot_input1">
                        <input wire:model="officedepartment" type="text" name="officedepartment" id="otOfficeDept" class="officedepartment">
                        <input wire:model="last_name" type="text" name="Lname" class="Lname" id="otLname">
                        <input wire:model="first_name" type="text" name="Fname" class="Fname" id="otFname">
                        <input wire:model="middle_name" type="text" name="Mname" class="Mname" id="otMname">
                    </div>
                    <div class="ot_labels1">
                        <label for="otOfficeDept" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                        <label for="otLname" class="Lnamelabel">LAST NAME</label>
                        <label for="otFname" class="Fnamelabel">FIRST NAME</label>
                        <label for="otMname" class="Mnamelabel">MIDDLE NAME</label>
                    </div>
                    <div class="ot_input2">
                        <input wire:model="position" type="text" name="position" class="position" id="otPosition">
                        <input wire:model="start_date" type="date" name="startDate" class="startDate" id="otStartDate">
                        <input wire:model="end_date" type="date" name="endDate" class="endDate" id="otEndDate">
                    </div>
                    <div class="ot_labels2">
                        <label for="otPosition" class="positionlabel">POSITION</label>
                        <label for="otStartDate" class="sdatelabel">START DATE</label>
                        <label for="otEndDate" class="edatelabel">END DATE</label>
                    </div>
                </div>
                <div class="reason-container">
                    <label for="otReason">Reasons:</label>
                    <textarea wire:model="reason" name="paragraph_text" cols="50" rows="10" class="reasons" id="otReason"></textarea>
                </div>
                <div class="submit">
                    <button type="submit" id="submitBtn">Submit</button>
                    <button type="button" id="cancel2">Cancel</button>
                </div>
            </form>
        </div>

        <!-- Official Business Form -->
        <div id="officialBusiness-form">
            <h1 class="form-heading">Application for Official Business</h1>
            <form wire:submit.prevent="submit_officialBusiness">
                @csrf
                <div class="officialBusinessForm">
                    <label for="obOfficeDept" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                    <input wire:model='officedepartment' type="text" name="officedepartment" id="obOfficeDept" class="officedepartment">

                    <label for="obLname" class="Lnamelabel">LAST NAME</label>
                    <input wire:model='last_name' type="text" name="Lname" id="obLname" class="Lname">

                    <label for="obFname" class="Fnamelabel">FIRST NAME</label>
                    <input wire:model='first_name' type="text" name="Fname" id="obFname" class="Fname">

                    <label for="obMname" class="Mnamelabel">MIDDLE NAME</label>
                    <input wire:model='middle_name' type="text" name="Mname" id="obMname" class="Mname">
                </div>
                <div class="officialBusinessForm">
                    <label for="obPosition" class="positionlabel">POSITION</label>
                    <input wire:model='position' type="text" name="position" id="obPosition" class="position">

                    <label for="obDestination" id="fromlabel">ITINERARY/DESTINATION</label>
                    <input wire:model='destination' type="text" name="from" id="obDestination">

                    <label for="obDate" id="timelabel">DATE</label>
                    <input wire:model='date' type="date" name="to" id="obDate">

                    <label for="obDeparture" id="timelabel">TIME OF DEPARTURE</label>
                    <input wire:model='from_time' type="time" name="departure" id="obDeparture">

                    <label for="obReturn" id="timelabel">TIME OF RETURN</label>
                    <input wire:model='to_time' type="time" name="return" id="obReturn">
                </div>
                <div class="reason-container">
                    <label for="obReason">Reasons:</label>
                    <textarea wire:model='reason' name="paragraph_text" cols="50" rows="10" class="reasons" id="obReason"></textarea>
                </div>
                <div class="submit">
                    <button type="submit" id="submitBtn">Submit</button>
                    <button type="button" id="cancel3">Cancel</button>
                </div>
            </form>
        </div>

        <!-- Travel Order Form -->
        <div id="travelOrder-form">
            <h1 class="form-heading">Application for Travel Order</h1>
            <form wire:submit.prevent="submit_travelOrder">
                <div class="travelOrderForm">
                    <label for="toOfficeDept" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                    <input wire:model="officedepartment" type="text" name="officedepartment" id="toOfficeDept" class="officedepartment">

                    <label for="toLname" class="Lnamelabel">LAST NAME</label>
                    <input wire:model="last_name" type="text" name="Lname" id="toLname" class="Lname">

                    <label for="toFname" class="Fnamelabel">FIRST NAME</label>
                    <input wire:model="first_name" type="text" name="Fname" id="toFname" class="Fname">

                    <label for="toMname" class="Mnamelabel">MIDDLE NAME</label>
                    <input wire:model="middle_name" type="text" name="Mname" id="toMname" class="Mname">
                </div>
                <div class="officialBusinessForm">
                    <label for="toPosition" class="positionlabel">POSITION</label>
                    <input wire:model="position" type="text" name="position" id="toPosition" class="position">

                    <label for="toDestination" id="travelDestinationlabel">TRAVEL DESTINATION</label>
                    <input wire:model='destination' type="text" name="travelDestination" id="toDestination">

                    <label for="toStartDate" id="startDateTravlabel">TRAVEL START DATE</label>
                    <input wire:model="start_date" type="date" name="startDate" id="toStartDate">

                    <label for="toEndDate" id="endDateTravlabel">TRAVEL END DATE</label>
                    <input wire:model="end_date" type="date" name="endDate" id="toEndDate">
                </div>
                <div class="reason-container">
                    <label for="toReason">Reasons:</label>
                    <textarea wire:model='reason' name="paragraph_text" cols="50" rows="10" class="reasons" id="toReason"></textarea>
                </div>
                <div class="submit">
                    <button type="submit" id="submitBtn">Submit</button>
                    <button type="button" id="cancel4">Cancel</button>
                </div>
            </form>
        </div>

        <div class="modal-overlay"></div>
    </div>

</div>



@push('styles')
    <link rel="stylesheet" href="{{ asset('css/workrequestpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/workrequestpage.js') }}" defer></script>
@endpush