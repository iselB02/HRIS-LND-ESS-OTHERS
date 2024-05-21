<div class="admin-scholarship-container">
    <div class="top-menu">
        <input type="search" name="search" id="search-scholarship-request" placeholder="Search">

    </div>
    <div class="display-scholarship-request">
        <table>
            <tr>
                <th>Name</th>
                <th>Office</th>
                <th>Type</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($scholars as $scholar)
            <tr id="{{ $scholar->id }}" fname="{{ $scholar->first_name }}" mname="{{ $scholar->middle_name }}" lname="{{ $scholar->last_name }}"
                address="{{ $scholar->address }}" postal="{{ $scholar->postal_code }}" civil-status="{{ $scholar->civil_status }}" position="{{ $scholar->position }}"
                course="{{ $scholar->course }}" start="{{ $scholar->start_date }}" end="{{ $scholar->end_date }}" school="{{ $scholar->school_name }}"
                school-address="{{ $scholar->school_address }}" type="{{ $scholar->type }}" office="{{ $scholar->officedepartment }}" remarks="{{ $scholar->remarks }}">
                <td>{{ $scholar->first_name }} {{ $scholar->middle_name }} {{ $scholar->last_name }}</td>
                <td>{{ $scholar->officedepartment }}</td>
                <td>{{ $scholar->type }}%</td>
                <td>{{ $scholar->published_date }}</td>
                <td>
                    <button id="delete">
                        <img wire:click="delete({{ $scholar->id }})"  src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                    <button class="view">
                        <img wire:click="edit({{ $scholar->id }})" src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
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
            <form wire:submit.prevent="updateStatus" id="edit-info">
                <h2>Edit Information</h2>
                <label for="edit-remarks">Remarks:</label>
                <textarea wire:model="remarks" id="edit-remarks" name="remarks" rows="4" placeholder="Enter remarks here..."></textarea>
                <label for="edit-status">Status:</label>
                <select wire:model="status" id="edit-status" name="status">
                    <option value="pending">Pending</option>
                    <option value="compliance">For Compliance</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <button type="submit" id="apply">Apply</button>
                <button type="button" id="close">Close</button>
            </form>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-scholarship.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-scholarship.js') }}" defer></script>
@endpush
