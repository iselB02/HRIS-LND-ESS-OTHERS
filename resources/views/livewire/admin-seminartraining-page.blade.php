<div class="admin-serminar-training-container">
    <div class="top-menu">
        <input type="search" id="search-seminar-training" placeholder="Search">
        <button id="add"> Add </button>
        <button id="delete">Delete</button>
    </div>
    <div class="display-semiar-training">
        <table>
            <tr>
                <th>Module</th>
                <th>Program</th>
                <th>Participants</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Type</th>
                <th></th>
            </tr>
            @foreach ($trainings as $training)
            <tr data-title="{{ $training->title }}" data-location="{{ $training->location }}" data-start_date="{{ $training->start_date }}" data-end_date="{{ $training->end_date}}" 
                data-start_time="{{ $training->start_time }}" data-end_time="{{ $training->end_time}}" data-description="{{ $training->description}}" 
                data-participants="{{ $training->participants}}" data-pre_test="{{ $training->pre_training}}" data-post-tes="{{ $training->post_training}}">
                <td>{{ $training->id }}</td>
                <td>{{ $training->title }}</td>
                <td>{{ $training->participants }}</td>
                <td>{{ $training->start_date }}</td>
                <td>{{ $training->end_date }}</td>
                <td>{{ $training->type }}</td>
                <td><button class="view">View</button><button id="edit">Edit</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="modal-overlay"></div>
    <div class="popup-modal">
        <div class="view">
            <div id="training-title"></div>
            <div id="line-divider"></div>
            <div class="details">
                <div id="main-info">
                    <h3 class="location"></h3>
                    <h3 class="date"></h3>
                    <h3 class="time"></h3>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <h3 class="participants">Participants</h3>
                <div class="bottom-menu">
                    <button id="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-modal1" style="display: none;">
        <form>
            <div id="title-div">
                <label for="title-input">Title</label>
                <input  wire:model="title" type="text" name="title" id="title-edit">
                <select id="type-edit" wire:model="type">                
                    <option value="" >Select Type</option>
                    <option value="Training">Training</option>
                    <option value="Seminar">Seminar</option>
                </select>
            </div>
            <!-- Other input fields for editing -->
            <div id="add-buttons">
                <button id="cancel">Cancel</button>
                <button id="add-training">Add</button>
            </div>
        </form>
    </div>
    <div class="add-form" style="display: none;">
        <form>
            <div id="title-div">
                <label for="title-input">Title</label>
                <input wire:model="title" type="text" name="title" id="title-input">
                <select id="type" wire:model="type">
                    <option value="" >Select Type</option>
                    <option value="Training">Training</option>
                    <option value="Seminar">Seminar</option>
                </select>
            </div>
            <!-- Other input fields for adding new training items -->
            <div id="add-buttons">
                <button id="cancel">Cancel</button>
                <button id="add-training">Add</button>
            </div>
        </form>
    </div>
</div>


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-seminar-training.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-seminar-training.js') }}" defer></script>
@endpush