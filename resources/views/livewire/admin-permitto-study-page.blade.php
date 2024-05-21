<div class="admin-permittostudy-container">
    <div class="top-menu">
        <input wire:model.defer="searchQuery" wire:keydown.enter="search" type="search" id="search-ipcr" placeholder="Search ...">  
    </div>
    <div class="display-permit-to-study">
        <table>
            <tr>
                <th>
                    <span>Name</span>
                    <span>
                        <button wire:click="sortData('name', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('name', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
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
                    <span>Date</span>
                    <span>
                        <button wire:click="sortData('average', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('average', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
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

            </tr>
            @if (!empty($searchQuery) && $permitToStudySearch->isNotEmpty())
                @foreach ($permitToStudySearch as $record)
                <tr data-record-id="{{ $record->id }}">
                    <td>{{ $record->name ?? 'N/A' }}</td>
                    <td>{{ $record->officedepartment ?? 'N/A' }}</td>
                    <td>{{ $record->created_at->format('F d, Y') }}</td>
                    <td>{{ $record->status }}</td>
                    <td>
                        <button class="view">
                            <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                        </button>
                        <button id="download">
                            <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                        </button>
                        <button id="delete">
                            <img wire:click.prevent="delete({{ $record->id }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                        </button>
                    </td>
                @endforeach
            @else
            @foreach($records as $record)
            <tr data-record-id="{{ $record->id }}">
                <td>{{ $record->name ?? 'N/A' }}</td>
                <td>{{ $record->officedepartment ?? 'N/A' }}</td>
                <td>{{ $record->created_at->format('F d, Y') }}</td>
                <td>{{ $record->status }}</td>
                <td>
                    <button class="view">
                        <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                    <button id="download">
                        <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                    </button>
                    <button id="delete">
                        <img wire:click.prevent="delete({{ $record->id }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                </td>
                @endforeach
            </tr>
            @endif
        </table>
    </div>

    <!-- Files section for each record -->
    @foreach($records as $record)
    <div class="view-file" id="view-file-{{ $record->id }}" style="display: none;">
        <div class="view-btns">
            <button class="close-btn">Close</button>
            <p>{{ $record->name ?? 'N/A' }}</p> <!-- Displaying the record name or 'N/A' if not available -->
        </div>
        <table>
            <tr>
                <th>File Name</th>
                <th>Actions</th>
            </tr>
            @foreach(['CoverMemo', 'RequestLetter', 'PermitToStudy', 'TeachingAssignment', 'SummaryOfSchedule', 'CertificationOfGrades', 'StudyPlan', 'FacultyEvaluation', 'RatedIPCR'] as $fileField)
                @if($record->$fileField) <!-- Checking if the file field has a value -->
                    <tr data-record-id="{{ $record->id }}">
                        <td>{{ $fileField }}</td> <!-- Displaying the file field name -->
                        <td>
                            <!-- Button to view the file, data-file-url contains the file's URL -->
                            <button class="view-file-btn" data-file-url="{{ asset('storage/' . $record->$fileField) }}">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
        <iframe id="file-viewer-{{ $record->id }}" class="file-viewer" style="display: none; width: 100%; height: 500px;"></iframe>
    </div>
    @endforeach

</div>



@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-permittostudy.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-permittostudy.js') }}" defer></script>
@endpush
