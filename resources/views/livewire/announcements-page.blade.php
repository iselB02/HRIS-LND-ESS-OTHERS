<div class="announcements-container">
    <div class="heading">Announcements</div>
    <div class="list-container">
        <ul>
            @foreach ($trainings as $training)
            <li class="announcement-list">
                <div  class="announcement" data-title="{{ $training->title }}" data-start_date="{{ $training->start_date }}" data-end_date="{{ $training->end_date }}" data-start_time="{{ $training->start_time }}" data-end_time="{{ $training->end_time }}" data-description="{{ $training->description }}">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">{{ $training->title }}</h1>
                        <span class="date">{{ $training->start_date}} to {{ $training->end_date }}  ||</span>
                        <span class="time">{{ $training->start_time }} to {{ $training->end_time }}</span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="modal-overlay"></div>
    <div class="popup-modal">
        <button type="button" id="close">X</button>
        <div class="announcement-container">
            <h1 id="modal-title">Leadership Seminar</h1>
            <span id="modal-date">December 05, 2023</span>
            <span id="modal-time">8:00PM</span>
            <p id="modal-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius elementum posuere. 
                Mauris finibus viverra magna, id blandit libero rutrum at. Pellentesque laoreet augue et mi varius, at tincidunt 
                ante maximus. Sed consequat, odio pretium varius ultricies, ligula lectus mollis risus, ac congue leo justo non lectus.
                Nullam accumsan odio felis, in facilisis felis gravida eu. Sed egestas id tellus sit amet pharetra.</p>
        </div>
    </div>
    
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/announcementspage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/announcementspage.js') }}" defer></script>
@endpush