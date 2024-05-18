<div class="admin-permittostudy-container">
    <div class="top-menu">
        <input type="search" name="search" id="search-permittostudy-request" placeholder="Search">
        <button id="print">Print</button>
        <select name="export-menu" id="export">
            <option value="" disabled selected>Export</option>
            <option value="opt1">.PDF</option>
            <option value="opt2">.Docs</option>
            <option value="opt3">.CSV</option>
        </select>
    </div>
    <div class="display-permit-to-study">
        <table>
            <tr>
                <th>Name</th>
                <th>Office</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach($records as $record)
            <tr data-record-id="{{ $record->id }}">
                <td>{{ $record->name ?? 'N/A' }}</td>
                <td>{{ $record->office ?? 'N/A' }}</td>
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
                        <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Files section for each record -->
    @foreach($records as $record)
    <div class="view-file" id="view-file-{{ $record->id }}" style="display: none;">
        <div class="view-btns">
            <button class="close-btn">Close</button>
            <p>{{ $record->name ?? 'N/A' }}</p>
        </div>
        <table>
            <tr>
                <th>File Name</th>
                <th>Actions</th>
            </tr>
            @foreach(['CoverMemo', 'RequestLetter', 'PermitToStudy', 'TeachingAssignment', 'SummaryOfSchedule', 'CertificationOfGrades', 'StudyPlan', 'FacultyEvaluation', 'RatedIPCR'] as $fileField)
                @if($record->$fileField)
                    <tr>
                        <td>{{ $fileField }}</td>
                        <td>
                            <button class="view-file-btn" data-file-url="{{ asset('storage/' . $record->$fileField) }}">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
    @endforeach
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-permittostudy.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-permittostudy.js') }}" defer></script>
@endpush
