<div class="admin-computer-aided">
  <div class="top-menu">
      <input type="search" name="search-course" id="search-input">
      <button id="search-btn">Search</button>
      <div class="top-button">
        <button id="myBtn">Open Modal</button>
    </div>
  </div>
  
  <div class="training-content">
    <div class="module">
        <div class="course-banner"></div>
        <div class="title">Course Title</div>
        <div class="videos">10 Videos</div>
        <a href="{{ route('adminCourses.index') }}" class="enter-btn">
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
  <div class="modal-overlay"></div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <form id="trainingForm">
                  <label for="title">Training Title:</label>
                  <input type="text" id="title" name="title"><br><br>
            
                  <div class="banner">
                    <label for="imageUpload">Add Picture:</label>
                    <input type="file" id="imageUpload" name="imageUpload" accept="image/*" onchange="displayImage(this)"><br><br>
                    <img id="displayedImage" style="display:none; max-width:100%; height:auto;">
                    <button type="button" onclick="removeImage()">Remove Image</button>
                  </div>
            
                  <label for="start-date">Start Date:</label>
                  <input type="date" id="start-date" name="start-date"><br><br>
            
                  <label for="end-date">End Date:</label>
                  <input type="date" id="end-date" name="end-date"><br><br>
            
                  <label for="description">Description:</label>
                  <textarea id="description" name="description" cols="50" rows="5"></textarea><br><br>
            
                  <label for="participants">Participants:</label>
                  <input type="number" id="participants" name="participants"><br><br>
            
                  <button type="button" onclick="submitForm()">Add</button>
                  <button type="button" onclick="closeModal()">Cancel</button>
                </form>
                </div>
            </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-computer-aided-training.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-computer-aided-training.js') }}" defer></script>
@endpush
