<div class="admin-scholarship-container">
    <div class="top-menu">
        <input wire:model.defer="searchQuery" wire:keydown.enter="search" type="search" name="search" id="search-scholarship-request" placeholder="Search">

    </div>
    <div class="display-scholarship-request">
        <table>
            <tr>
                <th>
                    <span>Name</span>
                    <span>
                        <button wire:click="sortData('first_name', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('first_name', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                
                <th>
                    <span>Office</span>
                    <span>
                       <button wire:click="sortData('officedepartment', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                    </span>
                    <span>
                        <button wire:click="sortData('officedepartment', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                    </span>
                </th>
                <th>
                    <span>Position</span>
                    <span>
                        <button wire:click="sortData('type', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('type', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                <th>
                    <span>Type</span>
                    <span>
                        <button wire:click="sortData('type', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('type', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>

                <th>
                    <span>Date</span>
                    <span>
                        <button wire:click="sortData('current_date', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('current_date', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                <th>
                    <span>Status</span>
                    <span>
                        <button wire:click="sortData('status', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('status', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                <th>Actions</th>
            </tr>
            @if (!empty($searchQuery) && $scholarshipSearch->isNotEmpty())
                @foreach ($scholarshipSearch as $scholar)
                <tr id="{{ $scholar->id }}" empname="{{ $scholar->employee_name }}"
                    address="{{ $scholar->address }}" postal="{{ $scholar->postal_code }}" civil-status="{{ $scholar->civil_status }}" position="{{ $scholar->position }}"
                    course="{{ $scholar->course }}" start="{{ $scholar->start_date }}" end="{{ $scholar->end_date }}" school="{{ $scholar->school_name }}"
                    school-address="{{ $scholar->school_address }}" type="{{ $scholar->type }}" office="{{ $scholar->college_department }}" remarks="{{ $scholar->remarks }}">
                    <td>{{ $scholar->employee_name }} "</td>
                    <td>{{ $scholar->college_department }}</td>
                    <td>{{ $scholar->position }}</td>
                    <td>{{ $scholar->type }}%</td>
                    <td>{{ $scholar->created_at->format('F j, Y') }}</td>
                    <td>{{ $scholar->status}}</td>
                    <td>
                        <button id="delete">
                            <img wire:click="delete({{ $scholar->employee_id }})"  src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                        </button>
                        <button class="view">
                            <img wire:click="edit({{ $scholar->employee_id }})" src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                        </button>
                    </td>
                </tr>
            @endforeach
            @else
            @foreach ($scholars as $scholar)
            <tr id="{{ $scholar->id }}" empname="{{ $scholar->employee_name }}"
                address="{{ $scholar->address }}" postal="{{ $scholar->postal_code }}" civil-status="{{ $scholar->civil_status }}" position="{{ $scholar->position }}"
                course="{{ $scholar->course }}" start="{{ $scholar->start_date }}" end="{{ $scholar->end_date }}" school="{{ $scholar->school_name }}"
                school-address="{{ $scholar->school_address }}" type="{{ $scholar->type }}" office="{{ $scholar->college_department }}" remarks="{{ $scholar->remarks }}"
                unit="{{ $scholar->units }}" term="{{ $scholar->term}}">
                <td>{{ $scholar->employee_name }}</td>
                <td>{{ $scholar->college_department }}</td>
                <td>{{ $scholar->position }}</td>
                <td>{{ $scholar->type }}%</td>
                <td>{{ $scholar->created_at->format('F j, Y') }}</td>
                <td>{{ $scholar->status}}</td>
                <td>
                    <button id="delete">
                        <img wire:click="delete({{ $scholar->employee_id }})"  src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                    <button class="view">
                        <img wire:click="edit({{ $scholar->employee_id }})" src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
        <div id="links">
            {{ $scholars->links() }}
        </div>
        @endif
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
