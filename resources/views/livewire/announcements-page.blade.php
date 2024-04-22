<div class="announcements-container">
    <div class="heading">Announcements</div>
    <div class="list-container">
        <ul>
            <li class="announcement-list">
                <div id="announcement">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">Leadership Seminar</h1>
                        <span class="date">December 15, 2023</span>
                        <span class="time">8:00PM</span>
                    </div>
                </div>
            </li>
            <li class="announcement-list">
                <div id="announcement">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">Gender Sensitivity Seminar</h1>
                        <span class="date">November 15, 2023</span>
                        <span class="time">8:00PM</span>
                    </div>
                </div>
            </li>
            <li class="announcement-list">
                <div id="announcement">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">Communication Skill Training</h1>
                        <span class="date">September 20, 2023</span>
                        <span class="time">10:00AM</span>
                    </div>
                </div>
            </li>
            <li class="announcement-list">
                <div id="announcement">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">Unlocking Creativity Workshop</h1>
                        <span class="date">September 15, 2023</span>
                        <span class="time">9:00AM</span>
                    </div>
                </div>
            </li>
            <li class="announcement-list">
                <div id="announcement">
                    <i class='bx bxs-megaphone'></i> <!-- Boxicon for notification -->
                    <div class="date-time">
                        <h1 class="announcement-title">Data Science Bootcamp</h1>
                        <span class="date">June 5-9, 2023</span>
                        <span class="time">5:00PM</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="modal-overlay"></div>
    <div class="popup-modal">
        <button type="button" id="close">X</button>
        <div class="announcement-container">
            <h1 class="announcement-title">Leadership Seminar</h1>
            <span class="date1">December 05, 2023</span>
            <span class="time1">8:00PM</span>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius elementum posuere. 
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