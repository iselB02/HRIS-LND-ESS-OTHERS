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
                <th>Status</th> <!-- Changed from Type to Status -->
                <th>Actions</th>
            </tr>
            @foreach($records as $record)
            <tr>
                <td>{{ $record->name ?? 'N/A' }}</td> <!-- Adjust according to your model's fields -->
                <td>{{ $record->office ?? 'N/A' }}</td> <!-- Adjust according to your model's fields -->
                <td>{{ $record->created_at->format('F d, Y') }}</td>
                <td>{{ $record->status }}</td> <!-- Status column -->
                <td>
                    <button id="download">
                        <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                    </button>
                    <button id="delete">
                        <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                    <button class="view">
                        <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="view-file">
        <div id="view-btns">
            <button id="close">Close</button>
        </div>
        <iframe src="{{ asset('documents/scholarship.pdf') }}" frameborder="0"></iframe>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-permittostudy.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-permittostudy.js') }}" defer></script>
@endpush
