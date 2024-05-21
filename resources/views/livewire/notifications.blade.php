<div>
    @foreach($trainings as $training)
        <li>
            <div class="scroll-container">
                <a href="#" class="notification-link">
                    <div class="notification-content">
                        <div class="notification-icon">
                            <i class='bx bxs-megaphone'></i>
                        </div>
                        <div class="notification-text">
                            <span class="notification-title">{{ $training->title }}</span>
                            <span class="notification-body">{{ $training->description }}</span>
                            <span class="notification-time">{{ $training->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
            </div>
        </li>
    @endforeach
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
@endpush