<div class="admin-computer-aided">
    <div class="top-menu">
        <input type="search" name="search-course" id="search-input">
        <button id="search-btn">Search</button>
    </div>
    <div class="training-content">
      <div class="module">
          <div class="course-banner"></div>
          <div class="title">Course Title</div>
          <div class="videos">10 Videos</div>
          <a href="{{ route('employeecourses.index') }}" class="enter-btn">
          <button id="enter">Enter</button>
          </a>
        </div>
        <div class="module">
            <div class="course-banner"></div>
            <div class="title">Course Title</div>
            <div class="videos">10 Videos</div>
            <a href="{{ route('employeecourses.index') }}" class="enter-btn">
            <button id="enter">Enter</button>
            </a>
          </div>
          <div class="module">
            <div class="course-banner"></div>
            <div class="title">Course Title</div>
            <div class="videos">10 Videos</div>
            <a href="{{ route('employeecourses.index') }}" class="enter-btn">
            <button id="enter">Enter</button>
            </a>
          </div>
          <div class="module">
            <div class="course-banner"></div>
            <div class="title">Course Title</div>
            <div class="videos">10 Videos</div>
            <a href="{{ route('employeecourses.index') }}" class="enter-btn">
            <button id="enter">Enter</button>
            </a>
          </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/computeraidedpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-computeraidedpage.js') }}" defer></script>
@endpush