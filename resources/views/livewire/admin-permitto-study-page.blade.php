<div class="admin-permittostudy-container">
    <div class="top-menu">
        <input wire:model.debounce.500ms="searchQuery" type="search" id="search-ipcr" placeholder="Search ...">
        <button wire:click="search">Search</button>
    </div>
    <div class="display-permit-to-study">
        <table>
            <thead>
                <tr>
                    <th>
                        <span>Name</span>
                        <span>
                            <button wire:click="sortData('name')"><img src="{{ asset('images/arrow_up.png') }}" alt="Sort"></button>
                        </span>
                    </th>
                    <th>
                        <span>Office</span>
                        <span>
                            <button wire:click="sortData('officedepartment')"><img src="{{ asset('images/arrow_up.png') }}" alt="Sort"></button>
                        </span>
                    </th>
                    <th>
                        <span>Date</span>
                        <span>
                            <button wire:click="sortData('published_date')"><img src="{{ asset('images/arrow_up.png') }}" alt="Sort"></button>
                        </span>
                    </th>
                    <th>
                        <span>Status</span>
                        <span>
                            <button wire:click="sortData('status')"><img src="{{ asset('images/arrow_up.png') }}" alt="Sort"></button>
                        </span>
                    </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($searchQuery) && !empty($permitToStudySearch))
                    @foreach ($permitToStudySearch as $record)
                        <tr data-record-id="{{ $record->id }}">
                            <td>{{ $record->name ?? 'N/A' }}</td>
                            <td>{{ $record->officedepartment ?? 'N/A' }}</td>
                            <td>{{ $record->published_date ?? 'N/A' }}</td>
                            <td>{{ $record->status ?? 'N/A' }}</td>
                            <td>
                                <button class="view">
                                    <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                                </button>
                                <button id="download">
                                    <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                                </button>
                                <button id="delete" wire:click="delete({{ $record->reference_num}})">
                                    <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($records as $record)
                        <tr data-record-id="{{ $record->id }}">
                            <td>{{ $record->name ?? 'N/A' }}</td>
                            <td>{{ $record->officedepartment ?? 'N/A' }}</td>
                            <td>{{ $record->published_date ?? 'N/A' }}</td>
                            <td>{{ $record->status ?? 'N/A' }}</td>
                            <td>
                                <button class="view">
                                    <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                                </button>
                                <button id="download">
                                    <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                                </button>
                                <button id="delete" wire:click="delete({{ $record->reference_num }})">
                                    <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div id="links">
            {{ $records->links() }}
        </div>
    </div>

    @foreach($records as $record)
        <div class="view-file" id="view-file-{{ $record->id }}" style="display: none;">
            <div class="view-btns">
                <button class="close-btn">Close</button>
                <p>{{ $record->name ?? 'N/A' }}</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(['CoverMemo', 'RequestLetter', 'PermitToStudy', 'TeachingAssignment', 'SummaryOfSchedule', 'CertificationOfGrades', 'StudyPlan', 'FacultyEvaluation', 'RatedIPCR'] as $fileField)
                        @if($record->$fileField)
                            <tr data-record-id="{{ $record->id }}">
                                <td>{{ $fileField }}</td>
                                <td>
                                    <button class="view-file-btn" data-file-url="{{ asset('storage/' . $record->$fileField) }}">
                                        <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                                    </button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div id="links">
                {{ $records->links() }}
            </div>
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
