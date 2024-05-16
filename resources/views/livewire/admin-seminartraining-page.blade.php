<div class="admin-serminar-training-container">
    <div class="top-menu">
        <input type="search" id="search-seminar-training" placeholder="Search">
        <button id="add"> add </button>
        <button id="delete">delete</button>
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
            <tr>
                <td>1</td>
                <td>Training 1</td>
                <td>5</td>
                <td>5/25/2022</td>
                <td>5/30/2022</td>
                <td><button id="view">view</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Training 2</td>
                <td>10</td>
                <td>6/02/2023</td>
                <td>6/09/2023</td>
                <td><button>view</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Training 3</td>
                <td>7</td>
                <td>10/20/2023</td>
                <td>10/30/2023</td>
                <td><button>view</button></td>
            </tr>
        </table>
    </div>
    <div class="modal-overlay"></div>
    <div class="popup-modal">
        <div class="view">
            <div id="training-title">Training 1</div>
            <div id="line-divider"></div>
            <div class="details">
                <div id="main-info">
                    <h3 class="location">Location: Manila</h2>
                    <h3 class="start-date">Start: 5/25/2022</h2>
                    <h3 class="end-date">End: 5/30/2022</h2>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="participants">
                    <h3 class="title">Participants</h2>
                    <table>
                        <tr>
                            <td>Jaun Dela Cruz</td>
                        </tr>
                        <tr>
                            <td>Mary Almonte</td>
                        </tr>
                        <tr>
                            <td>Joseph Sison</td>
                        </tr>
                    </table>
                </div>
                <div class="bottom-menu">
                    <button id="export">Export</button>
                    <button id="edit">Edit</button>
                    <button id="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-modal1">
        <div class="edit">
            <div id="training-title">Training 1</div>
            <div id="line-divider"></div>
            <div class="details">
                <div id="main-info">
                    <h3 class="location">Location: Manila</h2>
                    <h3 class="start-date">Start: 5/25/2022</h2>
                    <h3 class="end-date">End: 5/30/2022</h2>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="participants">
                    <h3 class="title">Participants</h3>
                    <table>
                        <tr>
                            <td>Jaun Dela Cruz</td>
                        </tr>
                        <tr>
                            <td>Mary Almonte</td>
                        </tr>
                        <tr>
                            <td>Joseph Sison</td>
                        </tr>
                    </table>
                </div>
                <div class="bottom-menu1">
                    <button id="export">Export</button>
                    <button id="apply">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="add-form">
            <div id="title-div">
                <label for="title-input">Training title</label>
                <input type="text" name="title" id="title-input">
            </div>
            <div id="training-info">
                <label for="location-input">Location</label>
                <input type="text" name="location" id="location-input">
                <label for="start-input">Start date</label>
                <input type="date" name="start-date" id="start-input">
                <label for="end-input">End date</label>
                <input type="date" name="end-date" id="end-input">
            </div>
            <div id="training-body">
                <label for="description-input">Description</label>
                <textarea name="description" id="description" cols="50" rows="5"></textarea>
                <label for="participants-input">Participants</label>
                <input type="text" name="participants" id="participants-input">
            </div>
            <div class="assessment">
                <label for="pre_test">Pre-Traning Assesment Link</label>
                <input id="pre_test" type="text">
                <label for="post_test">Post-Traning Assesment Link</label>
                <input id="post_test" type="text">
            </div>
            <div id="add-buttons">
                <button id="cancel">Cancel</button>
                <button id="add-training">Add</button>
            </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-seminar-training.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-seminar-training.js') }}" defer></script>
@endpush