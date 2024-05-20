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
                <th>Actions</th>
            </tr>
            @foreach ($scholars as $scholar)
            <tr id="{{ $scholar->id }}" fname="{{ $scholar->first_name }}" mname="{{ $scholar->middle_name }}" lname="{{ $scholar->last_name }}"
                address="{{ $scholar->address }}" postal="{{ $scholar->postal_code }}" civil-status="{{ $scholar->civil_status }}" position="{{ $scholar->position }}"
                course="{{ $scholar->course }}" start="{{ $scholar->start_date }}" end="{{ $scholar->end_date }}" school="{{ $scholar->school_name }}"
                school-address="{{ $scholar->school_address }}" type="{{ $scholar->type }}" office="{{ $scholar->officedepartment }}" remarks="{{ $scholar->remarks }}">
                <td>{{ $scholar->published_date }}</td>
                <td>{{ $scholar->status }}</td>
                <td>
                    <button id="delete">
                        <img wire:click="delete({{ $scholar->id }})"  src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                    <button class="view">
                        <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div id="scholarship-form-container">
        <h1 class="form-heading">Scholarship Application</h1>
        <form wire:submit.prevent="submit_scholarship">
            <h3>Personal Information</h3>
            <div id="section1">
                <input wire:model="first_name" type="text" name="Fname" id="Fname">
                <input wire:model="middle_name" type="text" name="Mname" id="Mname">
                <input wire:model="last_name" type="text" name="Lname" id="Lname">
                <label for="Fname" id="Fname-label">First Name</label>
                <label for="Mname" id="Mname-label">Middle Name</label>
                <label for="Lname" id="Lname-label">Last Name</label>
            </div>
            <div id="section2">
                <input wire:model="address" type="text" id="address">
                <input wire:model="postal_code" type="text" name="postal" id="postal">
                <input wire:model="civil_status" type="text" name="civil-status" id="civil-status">
                <label for="address" id="address-label">Full Address</label>
                <label for="postal" id="postal-label">Postal code</label>
                <label for="civil-status" id="civilStatus-label">Civil status</label>
            </div>
            <div id="divider"></div>
            <h3>Details of Application</h3>
            <div id="section3">
                <select wire:model="officedepartment" name="office" id="office" >   
                    <option value="" disabled selected>Select Office</option>
                    <option value="Board of Regents">Board of Regents</option>
                    <option value="PLM office of the President">PLM office of the President</option>
                    <option value="Office of the Registrar">Office of the Registrar</option>
                    <option value="Admission">Admission</option>
                    <option value="Office of the Executive Preisdent">Office of the Executive Preisdent</option>
                    <option value="Office of the Vice President for Academic Support Units">Office of the Vice President for Academic Support Units</option>
                    <option value="Office of University Legal Council">Office of University Legal Council</option>
                    <option value="Office of the Vice President for Information and Communications">Office of the Vice President for Information and Communications</option>
                    <option value="Office of the Vice President for Administration">Office of the Vice President for Administration</option>
                    <option value="Office of the Vice President for Finance">Office of the Vice President for Finance</option>
                    <option value="Cash Office/Treasury">Cash Office/Treasury</option>
                    <option value="Budget Office">Budget Office</option>
                    <option value="Internal Audit Office">Internal Audit Office</option>
                    <option value="Information and Communications Technology Office">Information and Communications Technology Office</option>
                    <option value="Office of Guidance and Testing Services">Office of Guidance and Testing Services</option>
                    <option value="Office of Student and Development Services">Office of Student and Development Services</option>
                    <option value="University Library">University Library</option>
                    <option value="University Research Center">University Research Center</option>
                    <option value="Center for University Extension Service">Center for University Extension Service</option>
                    <option value="University Health Service">University Health Service</option>
                    <option value="National Service Training Program">National Service Training Program</option>
                    <option value="Human Resource Development Office">Human Resource Development Office</option>
                    <option value="Procurement Office">Procurement Office</option>
                    <option value="Property and Supplies Office">Property and Supplies Office</option>
                    <option value="Physical Facilities Management Office">Physical Facilities Management Office</option>
                    <option value="University Security Office">University Security Office</option>
                    <option value="College of Architecture and Urban Planning">College of Architecture and Urban Planning</option>
                    <option value="College of Engineering and Technology">College of Engineering and Technology</option>
                    <option value="College of Education">College of Education</option>
                    <option value="College of Humanities, Arts and Social Science">College of Humanities, Arts and Social Science </option>
                    <option value="College of Nursing">College of Nursing</option>
                    <option value="College of Physical Therapy">College of Physical Therapy</option>
                    <option value="College of Science">College of Science</option>
                    <option value="College of Law">College of Law</option>
                    <option value="College of Medicine">College of Medicine</option>
                    <option value="PLM Business School">PLM Business School</option>
                    <option value="Graduate School of Law">Graduate School of Law</option>
                    <option value="School of Public Health">School of Public Health</option>
                    <option value="School of Government">School of Government</option>
                </select>
                <input wire:model="position" type="text" name="position" id="position">
                <select wire:model="type" name="type" id="type">
                    <option value="" disabled selected>Type of Scholarship</option>
                    <option value="25" >25%</option>
                    <option value="50" >50%</option>
                    <option value="100" >100%</option>
                </select>
                <label for="office" id="office-label">Office</label>
                <label for="position" id="position-label">Position</label>
                <label for="type" id="type-label">Type of Scholarship</label>
            </div>
            <div id="section4">
                <input wire:model="course" type="text" name="crs-title" id="crs-title">
                <input wire:model="start_date" type="date" name="duration" id="start-date">
                <input wire:model="end_date" type="date" name="duration" id="end-date">
                <label for="crs-title" id="crs-label">Course Title</label>
                <label for="start-date" id="duration-label">Course Duration</label>
            </div>
            <div id="section5">
                <input wire:model="school_name" type="text" name="school" id="school">
                <input wire:model="school_address" type="text" name="school-address" id="school-address">
                <label for="school" id="school-label">College/University</label>
                <label for="school-address" id="schoolAdd-label">Address</label>
            </div> 
            <div id="buttons">
                <button type="submit" id="submit">Submit</button>
                <button id="cancel">Cancel</button>
            </div>
        </form>        
    </div>
    <div wire:ignore id="modal-overlay"></div>
    <div wire:ignore class="view-file">
        <div  wire:ignore.self class="scholarship-view">
            <h1 class="form-heading">Scholarship Application</h1>
            <div id="personal-info">
                <h2>Personal Information</h2>
                <h3 id="detail-name"></h3>
                <h3 id="detail-address"></h3>
                <h3 id="detail-civilStatus"></h3>
            </div>
            <div id="application-info">
                <h2>Application Details</h2>
                <h3 id="detail-office"></h3>
                <h3 id="detail-position"></h3>
                <h3 id="detail-type"></h3>
                <h3 id="detail-course"></h3>  
                <h3 id="detail-duration"></h3> 
                <h3 id="detail-school"></h3>  
                <h3 id="detail-schoolAddress"></h3> 
            </div> 
                <button type="button" id="close">Close</button>
        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/scholarshippage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/scholarshippage.js') }}" defer></script>
@endpush