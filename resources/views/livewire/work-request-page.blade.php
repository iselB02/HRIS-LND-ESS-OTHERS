<div class="workreq-container">
    <div class="banner">
        <img id="banner_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 class="banner_h1">Work Request Service</h1>
    </div>
    <div class="button-container">
        <div class="col1">
            {{-- <div id="leaveRequest">
                <img src="{{ asset('images/calendar.png') }}" alt="calendar_icon">
                <h1>Leave Request</h1>
            </div> --}}
            <div id="overTime">
                <img src="{{ asset('images/wall-clock.png') }}" alt="wall_clock_icon">
                <h1>Over Time</h1>
            </div>
        </div>
        <div class="col2">
            <div id="officialBusiness">
                <img src="{{ asset('images/paperwork.png') }}" alt="paperwork_icon">
                <h1>Official Business</h1>
            </div>
            <div id="travelOrder">
                <img src="{{ asset('images/suitcase.png') }}" alt="suitcase_icon">
                <h1>Travel Order</h1>
            </div>
        </div>
    {{-- </div>
<!--Leave form-->
    <div id="leave-form">
        <h1 class="form-heading">Application for Leave</h1>
        <form wire:submit.prevent="submit_leaveForm">
            <div class="personalinfo">
                <input wire:model="officedepartment" type="text" name="officedepartment" class="officedepartment" >
                <input wire:model="last_name" type="text" name="Lname" class="Lname">
                <input wire:model="first_name" type="text" name="Fname" class="Fname">
                <input wire:model="middle_name" type="text" name="Mname" class="Mname">
                <label for="officedepartment1" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                <label class="Lnamelabel" for="Lname">LAST NAME</label>
                <label class="Fnamelabel" for="Fname">FIRST NAME</label>
                <label class="Mnamelabel" for="Mname">MIDDLE NAME</label>
            </div>
            <div class="personalinfo">
                <input wire:model="filing_date" type="date" name="filing-date" id="filing-date">
                <input wire:model="position" type="text" name="position" class="position1">
                <input wire:model="salary" type="text" name="salary" class="salary">
                <div>
                    <label id="datelabel" for="filing-date">DATE OF FILING</label>
                    <label id="positionlabel1" for="position">POSITION</label>
                    <label id="salarylabel" for="salary">SALARY</label>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-heading2">DETAILS OF APPLICATION</div>
            <div class="details-container">
                <div class="type-leave">
                    <h2>TYPE OF LEAVE TO BE AVAILED OF</h2>
                    <label ><input wire:model="leave_type" type="radio" value="Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No 292)"> Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)"> Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)"> Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Maternity Leave (R.A. No. 11210/IRR Issued by CSC, DOLE and SSS)"> Maternity Leave (R.A. No. 11210/IRR Issued by CSC, DOLE and SSS)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Paternity Leave (R.A. No. 8187/CSC MC Np. 71, s. 1998, as amended)"> Paternity Leave (R.A. No. 8187/CSC MC Np. 71, s. 1998, as amended)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)"> Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Solo Parent Leave (R.A. No. 8972/CSC MC No. 8, s. 2004)"> Solo Parent Leave (R.A. No. 8972/CSC MC No. 8, s. 2004)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)"> Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="10-Day VAWC Leave (R.A. No. 9262/CSC MC No. 15, s. 2005)"> 10-Day VAWC Leave (R.A. No. 9262/CSC MC No. 15, s. 2005)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)"> Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Special Leave Benefits for Women (R.A. No. 9710/CSC MC No. 25, s. 2010)"> Special Leave Benefits for Women (R.A. No. 9710/CSC MC No. 25, s. 2010)</label>
                    <label ><input wire:model="leave_type" type="radio" value="Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)"> Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)</label>
                    <label ><input wire:model="leave_type" type="radio" value=" Adoption Leave (R.A. No. 8552)"> Adoption Leave (R.A. No. 8552)</label>
                    <label ><input type="radio" id="others_btn">Others</label>
                    <label for="others" id="otherslabel">Others:</label>
                    <input wire:model="leave_type" type="text" name="others" id="others">
                </div>
                <div class="details-leave">
                    <h2>DETAILS OF LEAVE</h2>
                    <div class="specialPrivilegeLeave">
                        <h3>In case of Vacation/Special Privilege Leave:</h3>
                    <label ><input wire:model="details_leave" type="radio" value="Within the Philippines"> Within the Philippines <input wire:model="location" type="text" name="location" class="inputs"></label>
                    <label ><input wire:model="details_leave" type="radio" value="Abroad"> Abroad (Specify) <input wire:model="location" type="text" name="location" class="inputs"></label>
                    </div>
                    <div class="sickLeave">
                        <h3>In case of Sick Leave:</h3>
                    <label ><input wire:model="details_leave" type="radio"> In Hospital (Specify Illness)<input wire:model="location" type="text" name="location" class="inputs"></label>
                    <label ><input wire:model="details_leave" type="radio"> Out Patient (Specify Illness) <input wire:model="location" type="text" name="location" class="inputs"></label>
                    </div>
                    <div class="speacialLeave">
                        <h3>In case of Special Leave Benefits for Women:</h3>
                        <label> (Specify Illness) <input wire:model="details_leave" type="text" name="specIllness" class="inputs"></label>
                    </div>
                    <div class="studyLeave">
                        <h3>In case of Study Leave:</h3>
                    <label ><input wire:model="details_leave" type="radio" value="Completion of Master's Degree"> Completion of Master's Degree</label>
                    <label ><input wire:model="details_leave" type="radio" value="BAR/Board Examination Review"> BAR/Board Examination Review</label>
                    </div>
                    <div class="otherPurpose">
                        <h3>Other purpose:</h3>
                    <label ><input wire:model="details_leave" type="radio" value="Mobilization of Leave Credits"> Mobilization of Leave Credits</label>
                    <label ><input wire:model="details_leave" type="radio" value="Terminal Leave"> Terminal Leave</label>
                    </div>
                </div>
            </div>
            <div class="divider1"></div>
            <div class="NumLeave">
                <label>NUMBER OF WORKING DAYS APPLIED FOR <input wire:model="num_leaves" type="text"class="inputs"></label>
                <label>INCLUSIVE DATES<input wire:model="start_date"  type="date"class="inputs" id="fromDate"> - <input wire:model="end_date"  type="date"class="inputs" id="toDate"></label>
            </div>
            <div class="divider2"></div>
            <div class="commutation">
                <h3>COMMUTATION</h3>
                <label ><input wire:model="commutation"  type="radio" value="Not Requested"> Not Requested</label>
                <label ><input wire:model="commutation" type="radio" value="Requested"> Requested</label>
                <label > Signature of Applicant</label>
                <input wire:model="signature" type="file" id="signature">
            </div>
            <div class="submit">
                <button type="submit" id="submitBtn">Submit</button>
                <button type="button" id="cancel1">Cancel</button>
            </div>
        </form>
    </div> --}}
<!--Overtime form-->
    <div id="overtime-form">
        <h1 class="form-heading">Application for Overtime</h1>
        <form wire:submit.prevent="submit_otForm">
            @csrf
            <div class="otForm"> 
                <input wire:model="officedepartment" type="text" name="officedepartment" id="otOfficeDept" class="officedepartment">
                <input wire:model="last_name" type="text" name="Lname" class="Lname" id="otLname">
                <input wire:model="first_name" type="text" name="Fname" class="Fname" id="otFname">
                <input wire:model="middle_name" type="text" name="Mname" class="Mname" id="otMname">
                <label for="officedepartment" class=officedepartmentlabel>OFFICE/DEPARTMENT</label>
                <label class="Lnamelabel" for="Lname">LAST NAME</label>
                <label class="Fnamelabel" for="Fname">FIRST NAME</label>
                <label class="Mnamelabel" for="Mname">MIDDLE NAME</label>
            </div>
            <div class="otForm">
                <input wire:model="position" type="text" name="position" class="position" id="otPosition">
                <input wire:model="start_date" type="date" name="startDate" class="startDate" id="otStartDate">
                <input wire:model="end_date" type="date" name="endDate" class="endDate" id="otEndDate">
                <div>
                    <label class="positionlabel" for="Lname">POSITION</label>
                    <label class="sdatelabel" for="startDate">START DATE</label>
                    <label class="edatelabel" for="endDate">END DATE</label>
                </div>
            </div>
            <div class="reason-container">
                <label for="reasons">Reasons:</label>
                <textarea wire:model="reason" name="paragraph_text" cols="50" rows="10" class="reasons" id="otReason"></textarea>
            </div>
            <div class="submit">
                <button type="submit" id="submitBtn">Submit</button>
                <button type="button" id="cancel2">Cancel</button>
            </div>
        </form>
    </div>
<!--Official Business-->
    <div id="officialBusiness-form">
        <h1 class="form-heading">Application for Official Business</h1>
        <form wire:submit.prevent="submit_officialBusiness">
            @csrf
            <div class="officialBusinessForm">
                <input wire:model='officedepartment' type="text" name="officedepartment" class="officedepartment">
                <input wire:model='last_name' type="text" name="Lname" class="Lname">
                <input wire:model='first_name' type="text" name="Fname" class="Fname">
                <input wire:model='middle_name' type="text" name="Mname" class="Mname">
                <label for="officedepartment" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                <label class="Lnamelabel" for="Lname">LAST NAME</label>
                <label class="Fnamelabel" for="Fname">FIRST NAME</label>
                <label class="Mnamelabel" for="Mname">MIDDLE NAME</label>
            </div>
            <div class="officialBusinessForm">
                <input wire:model='position' type="text" name="position" class="position">
                <input wire:model='destination' type="text" name="from" id="from">
                <input wire:model='date' type="date" name="to" id="to">
                <input wire:model='from_time' type="time" name="departure" id="departure">
                <input wire:model='to_time' type="time" name="return" id="return">
                <div>
                    <label class="positionlabel" for="position">POSITION</label>
                    <label id="fromlabel" for="from">ITENERARY/DESTINATION</label>
                    <label id="timelabel" for="departure">TIME OF</label>
                </div>
            </div>
            <div class="reason-container">
                <label for="reasons">Reasons:</label>
                <textarea wire:model='reason' name="paragraph_text" cols="50" rows="10" class="reasons"></textarea>
            </div>
            <div class="submit">
                <button type="submit" id="submitBtn">Submit</button>
                <button type="button" id="cancel3">Cancel</button>
            </div>
        </form>
    </div>

    <!--Travel Order-->
    <div id="travelOrder-form">
        <h1 class="form-heading">Application for Travel Order</h1>
        <form wire:submit.prevent="submit_travelOrder">
            <div class="travelOrderForm">
                <input wire:model="officedepartment" type="text" name="officedepartment" class="officedepartment">
                <input wire:model="last_name" type="text" name="Lname" class="Lname">
                <input wire:model="first_name" type="text" name="Fname" class="Fname">
                <input wire:model="middle_name" type="text" name="Mname" class="Mname">
                <label for="officedepartment" class="officedepartmentlabel">OFFICE/DEPARTMENT</label>
                <label class="Lnamelabel" for="Lname">LAST NAME</label>
                <label class="Fnamelabel" for="Fname">FIRST NAME</label>
                <label class="Mnamelabel" for="Mname">MIDDLE NAME</label>
            </div>
            <div class="officialBusinessForm">
                <input wire:model="position" type="text" name="position" class="position">
                <input wire:model='destination' type="text" name="travelDestination" id="tarvelDestination">
                <input wire:model="start_date" type="date" name="startDate" id="startDateTrav">
                <input wire:model="end_date" type="date" name="endDate" id="endDateTrav">
                <div>
                    <label class="positionlabel" for="position">POSITION</label>
                    <label id="travelDestinationlabel" for="travelDestination">TRAVEL DESTINATION</label>
                    <label id="startDateTravlabel" for="startDate">TRAVEL START DATE</label>
                    <label id="endDateTravlabel" for="endDate">TRAVEL END DATE</label>
                </div>
            </div>
            <div class="reason-container">
                <label for="reasons">Reasons:</label>
                <textarea wire:model='reason' name="paragraph_text" cols="50" rows="10" class="reasons"></textarea>
            </div>
            <div class="submit">
                <button type="submit" id="submitBtn">Submit</button>
                <button type="button" id="cancel4">Cancel</button>
            </div>
        </form>
    </div>

    <div class="modal-overlay"></div>

</div>



@push('styles')
    <link rel="stylesheet" href="{{ asset('css/workrequestpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/workrequestpage.js') }}" defer></script>
@endpush