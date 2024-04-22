<div class="dashboard_container">
    <div id="applications">
        <div id="top-section">
            <h2>Scholarship Application</h2>
            <button id="apply">New Application</button>
        </div>
        <table>
            <tr>
                <th>Application Date</th>
                <th>Application status</th>
            </tr>
            <tr>
                <td>21 April 2023</td>
                <td>Pending for Approval</td>
                <td><button>View</button></td>
            </tr>
        </table>
    </div>
    <div id="scholarship-form-container">
        <h1 class="form-heading">Scholarship Application</h1>
        <form action="">
            <h3>Personal Information</h3>
            <div id="section1">
                <input type="text" name="Fname" id="Fname">
                <input type="text" name="Mname" id="Mname">
                <input type="text" name="Lname" id="Lname">
                <label for="Fname" id="Fname-label">First Name</label>
                <label for="Mname" id="Mname-label">Middle Name</label>
                <label for="Lname" id="Lname-label">Last Name</label>
            </div>
            <div id="section2">
                <input type="text" id="address">
                <input type="text" name="postal" id="postal">
                <input type="text" name="civil-status" id="civil-status">
                <label for="address" id="address-label">Full Address</label>
                <label for="postal" id="postal-label">Postal code</label>
                <label for="civil-status" id="civilStatus-label">Civil status</label>
            </div>
            <div id="divider"></div>
            <h3>Details of Application</h3>
            <div id="section3">
                <select name="office" id="office" >
                    <option value="" disabled selected>Select Office</option>
                    <option value="opt1">Board of Regents</option>
                    <option value="opt2">PLM office of the President</option>
                    <option value="opt3">Office of the Registrar</option>
                    <option value="opt4">Admission</option>
                    <option value="opt5">Office of the Executive Preisdent</option>
                    <option value="opt6">Office of the Vice President for Academic Support Units</option>
                    <option value="opt7">Office of University Legal Council</option>
                    <option value="opt8">Office of the Vice President for Information and Communications</option>
                    <option value="opt9">Office of the Vice President for Administration</option>
                    <option value="opt10">Office of the Vice President for Finance</option>
                    <option value="opt11">Cash Office/Treasury</option>
                    <option value="opt12">Budget Office</option>
                    <option value="opt13">Internal Audit Office</option>
                    <option value="opt14">Information and Communications Technology Office</option>
                    <option value="opt15">Office of Guidance and Testing Services</option>
                    <option value="opt16">Office of Student and Development Services</option>
                    <option value="opt17">University Library</option>
                    <option value="opt18">University Research Center</option>
                    <option value="opt19">Center for University Extension Service</option>
                    <option value="opt20">University Health Service</option>
                    <option value="opt21">National Service Training Program</option>
                    <option value="opt22">Human Resource Development Office</option>
                    <option value="opt23">Procurement Office</option>
                    <option value="opt24">Property and Supplies Office</option>
                    <option value="opt25">Physical Facilities Management Office</option>
                    <option value="opt26">University Security Office</option>
                    <option value="opt27">College of Architecture and Urban Planning</option>
                    <option value="opt28">College of Engineering and Technology</option>
                    <option value="opt29">College of Education</option>
                    <option value="opt30">College of Humanities, Arts and Social Science </option>
                    <option value="opt31">College of Nursing</option>
                    <option value="opt32">College of Physical Therapy</option>
                    <option value="opt33">College of Science</option>
                    <option value="opt34">College of Law</option>
                    <option value="opt35">College of Medicine</option>
                    <option value="opt36">PLM Business School</option>
                    <option value="opt37">Graduate School of Law</option>
                    <option value="opt38">School of Public Health</option>
                    <option value="opt39">School of Government</option>
                </select>
                <input type="text" name="position" id="position">
                <label for="office" id="office-label">Office</label>
                <label for="position" id="position-label">Position</label>
            </div>
            <div id="section4">
                <input type="text" name="crs-title" id="crs-title">
                <input type="date" name="duration" id="start-date">
                <input type="date" name="duration" id="end-date">
                <label for="crs-title" id="crs-label">Course Title</label>
                <label for="duration" id="duration-label">Course Duration</label>
            </div>
            <div id="section5">
                <input type="text" name="school" id="school">
                <input type="text" name="school-address" id="school-address">
                <label for="school" id="school-label">College/University</label>
                <label for="school-address" id="schoolAdd-label">Address</label>
            </div> 
            <div id="buttons">
                <button type="submit" id="submit">Submit</button>
                <button id="cancel">Cancel</button>
            </div>
        </form>        
    </div>

    <div class="modal-overlay"></div>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/scholarshippage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/scholarshippage.js') }}" defer></script>
@endpush