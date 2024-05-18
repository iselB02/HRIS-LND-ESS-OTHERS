<div class="seminartraining-container">
    <div class="admin-serminar-training-container">
        <div class="top-menu">
            <input type="search" id="search-seminar-training" placeholder="Search">
        </div>
        <div class="display-semiar-training">
            <table>
                <tr>
                    <th>Module</th>
                    <th>Program</th>
                    <th>Participants</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th></th>
                </tr>
                @foreach ($trainings as $training)
                <tr data-title="{{ $training->title }}" data-location="{{ $training->location }}" data-pre-link="{{ $training->pre_training}}" data-post-link="{{ $training->post_training }}" data-start-date="{{ $training->start_date }}" data-end-date="{{ $training->end_date }}" >
                    <td>{{ $training->id }}</td>
                    <td>{{ $training->title }}</td>
                    <td>{{ $training->participants }}</td>
                    <td>{{ $training->start_date }}</td>
                    <td>{{ $training->end_date }}</td>
                    <td><button class="view">View</button></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="seminar_view" style="display:none;">
        <button class="close">Close</button>
        <div class="seminartraining-banner">
            <img id="seminartraining_img" src="{{ asset('images/image.png') }}" alt="plm">
        </div>
        <div class="seminartraining-main">
            <div class="assessment">
                <div class="pre-training">
                    <button id="pre-test-btn" data-pre-test-url="">Take Pre-Training Assessment</button>
                </div>
                <div class="post-training">
                    <button id="post-test-btn" data-post-test-url="">Take Post-Training Assessment</button>
                </div>
            </div>
            <div class="details-container">
                <div class="details">
                    <h1>Details</h1>
                    <ul>
                        <li id="detail-topic"></li>
                        <li id="detail-date"></li>
                        <li id="detail-location"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/seminartrainingpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/seminar-training.js') }}" defer></script>
@endpush
