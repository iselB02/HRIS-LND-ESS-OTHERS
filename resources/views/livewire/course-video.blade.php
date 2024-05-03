<div class="course-video-container">
    <div class="main-content">
        <div class="navigation">
            <a href="{{ route('employeecourses.index') }}" class="back-btn">
                <button id="back">Back</button>
              </a>
            <h1 id="chapters">Course Chapters</h1>
            <div class="chapters-nav">
                <ul id="chapters">
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Introduction</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 1</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 2</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 3</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 4</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 5</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 6</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 7</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 8</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 9</li>
                    <li class="chapter"><img src="{{ asset('images/play_icon.png') }}" alt="Play Icon" class="play_icon">Chapter 10</li>
                </ul>
            </div>
        </div>
        <div class="media-content">
            <div class="top-content">
            <h1 class="title">Content Title</h1>
            <div class="media-player">

            </div>
            </div>
            <div class="lower-menu">
                <div class="note-section">
                    <label for="notes">Add Notes</label>
                    <textarea name="notes" id="note" cols="105" rows="2"></textarea>
                </div>
                <duiv class="buttons">
                    <button id="prev">Previous</button>
                    <button id="next">Next</button>
                </duiv>
            </div>
        </div>
        
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/course-video.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-course-video.js') }}" defer></script>
@endpush