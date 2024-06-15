<div class="dashboard_container">
    <div id="applications">
        <div id="top-section">
            <h2 id="title-h2">Scholarship Application</h2>
            <button id="apply">New Application</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Application Date</th>
                    <th>Application status</th>
                    <th>Actions</th>
                </tr>
            </thead>
           <tbody>
            @foreach ($scholars as $scholar)
            <tr id="{{ $scholar->id }}" employee_name="{{ $scholar->employee_name }}"
                address="{{ $scholar->address }}" postal="{{ $scholar->postal_code }}" civil-status="{{ $scholar->civil_status }}" position="{{ $scholar->position }}"
                course="{{ $scholar->course }}" start="{{ $scholar->start_date }}" end="{{ $scholar->end_date }}" school="{{ $scholar->school_name }}"
                school-address="{{ $scholar->school_address }}" type="{{ $scholar->type }}" office="{{ $scholar->college_department }}" remarks="{{ $scholar->remarks }}"
                unit="{{ $scholar->units }}" term="{{ $scholar->term}}">
                <td>{{ $scholar->created_at->format('F j, Y') }}</td>
                <td>{{ $scholar->status }}</td>
                <td>
                    <button class="view">
                        <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                </td>
            </tr>
            @endforeach
           </tbody>
    
        </table>
        <div id="links">
            {{ $scholars->links() }}
        </div>
    </div>

    <div id="scholarship-form-container">
        <h1 class="form-heading">Scholarship Application</h1>

        <form wire:submit.prevent="submit_scholarship">
            <h3>Details of Application</h3>
            <div id="section3">
               @if ($this->employee)
                  <select wire:model="collegeDepartment" name="department_or_college_id">
                      <option value="">Select Department or College</option>
                      @foreach ($departments as $department)
                          <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                      @endforeach

                      @foreach ($colleges as $college)
                          <option value="{{ $college->college_name  }}">{{ $college->college_name }}</option>
                      @endforeach
                  </select>
           	   @endif
              	<input wire:model="course" type="text" name="crs-title" id="crs-title">
                <select wire:model="type" name="type" id="type">
                    <option value="">Type of Scholarship</option>
                    <option value="25" >25%</option>
                    <option value="50" >50%</option>
                    <option value="100" >100%</option>
                </select>
                <label for="office" id="office-label">Office</label>
               <label for="crs-title" id="crs-label">Course Title</label>
                <label for="type" id="type-label">Type of Scholarship</label>
            </div>
            <div id="section4">
               
                <select wire:model="term" name="term" id="term">
                    <option value="">School Term</option>
                    <option value="First Semester" >First Semester</option>
                    <option value="Second Semester" >Second Semester</option>
                    <option value="Third Semester" >Third Semester</option>
                </select>
                <input wire:model="units" type="text" name="units" id="units">
                <input wire:model="start_date" type="date" name="duration" id="start-date">
                <input wire:model="end_date" type="date" name="duration" id="end-date">
                <label for="term" id="term-label">School Term</label>
                <label for="units" id="units-label">Total Units </label>
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
                <h3 id="detail-term"></h3>  
                <h3 id="detail-units"></h3>
                <h3 id="detail-duration"></h3> 
                <h3 id="detail-school"></h3>  
                <h3 id="detail-schoolAddress"></h3>
                <h3 id="detail-remarks"></h3>  
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