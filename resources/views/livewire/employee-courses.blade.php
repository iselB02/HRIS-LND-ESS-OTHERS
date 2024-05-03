<div class="course-container">
    <div class="main-container">
        <div class="top-menu">
            <a href="{{ route('computeraided.index') }}" class="back-btn">
                <button id="back">Back</button>
              </a>
        </div>
        <div class="course-preview">
            <div class="media-preview">
    
            </div>
            <div class="course-info">
                <h1 id="course-title">Course Title</h1>
                <p>Description: Nunc at facilisis orci. Praesent fringilla nunc et sollicitudin bibendum.
                    Maecenas accumsan at augue ac tempor. Donec quis justo porta, rutrum massa quis, 
                    blandit orci. Mauris lacinia massa sapien, sit amet fringilla arcu aliquet ut. Morbi 
                    eget magna turpis. Sed viverra suscipit pretium. Nunc leo neque, mollis at nunc nec, 
                    porttitor finibus dui. Nulla at elementum purus, vel efficitur risus. Pellentesque 
                    tempus ullamcorper pretium.</p>
                <button id="view">See Participants</button>
            </div>
        </div>
    
        <div class="chapters">
                <!-- Repeat this section for each chapter -->
                <div class="chapter">
                    <h2>Chapter No.# Course</h2>
                    <div class="media-chapter">
                        <!-- Placeholder for Chapter Preview Picture/Video -->
                    </div>
                    <div class="video-info">
                        <p>Video Title</p>
                        <a href="{{ route('coursevideo.index') }}" class="enter-btn">
                            <button id="enterChapter" onclick="enterChapter()">Enter</button>
                        </a>
                    </div>
                </div>
                <div class="chapter">
                    <h2>Chapter No.# Course</h2>
                    <div class="media-chapter">
                        <!-- Placeholder for Chapter Preview Picture/Video -->
                    </div>
                    <div class="video-info">
                        <p>Video Title</p>
                        <a href="{{ route('coursevideo.index') }}" class="enter-btn">
                            <button id="enterChapter" onclick="enterChapter()">Enter</button>
                        </a>
                    </div>
                </div>
                <div class="chapter">
                    <h2>Chapter No.# Course</h2>
                    <div class="media-chapter">
                        <!-- Placeholder for Chapter Preview Picture/Video -->
                    </div>
                    <div class="video-info">
                        <p>Video Title</p>
                        <a href="{{ route('coursevideo.index') }}" class="enter-btn">
                            <button id="enterChapter" onclick="enterChapter()">Enter</button>
                        </a>
                    </div>
                </div>  
        </div>

    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/empcourses.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/empcourses.js') }}" defer></script>
@endpush