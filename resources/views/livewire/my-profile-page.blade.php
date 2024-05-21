<!-- resources/views/livewire/profile.blade.php -->

<div class="my_profile_container">
    <div class="my_profile_main">
        <div class="main_user_details">
            <div id="cover-photo">
                <img id="cover" alt="Cover Photo" class="cover_photo" src="{{ $profile->cover_photo ? Storage::url($profile->cover_photo) : 'default-cover.jpg' }}">
                <div class="side_edit">
                    <button class="edit_info"><img src="{{ asset('images/edit.png') }}" alt="EditIcon" id="edit"></button>
                </div>
            </div>
            <div class="user_info">
                <p id="name">{{ $profile->name }}</p>
                <p class="info">Studied at {{ $profile->school }}</p>
                <p class="info">{{ $profile->phone_number }}</p>
            </div>
            <div id="profile-photo">
                <img alt="Profile Picture" class="profile_picture" src="{{ $profile->profile_photo ? Storage::url($profile->profile_photo) : 'default-profile.jpg' }}">
            </div>
        </div>
        <div class="main_about">
            <p>{{ $profile->bio }}</p>
        </div>
        <div class="main_seminars_tag">
            @livewire('training')
            <div class="add_button"> 
                <button id="add_training">Add</button>
            </div>
        </div>
    </div>

    <div wire:ignore id="editProfileModal" class="edit_profile_modal">
        <span class="close" >&times;</span>
        <div class="modal_content">
            <form wire:submit.prevent="updateProfile">            
                <div class="current_image">
                    <img alt="Current Profile Picture" id="currentProfilePic" src="{{ $profile->profile_photo ? Storage::url($profile->profile_photo) : 'default-profile.jpg' }}">
                </div>

                <div class="edit_field">
                    <input wire:model="profile_photo" type="file" id="profile_pic">
                </div>

                <div class="current_image">
                    <img alt="Current Cover Photo" id="currentCoverPhoto" src="{{ $profile->cover_photo ? Storage::url($profile->cover_photo) : 'default-cover.jpg' }}">
                </div>

                <div class="edit_field">
                    <input wire:model="cover_photo" type="file" id="cover_photo">
                </div>

                <div class="other_info">
                    <input wire:model="school" id="school" type="text" placeholder="College/University">
                    <input wire:model="phone_number" id="phone_number" type="text" placeholder="Phone Number">
                </div>
                
                <div class="edit_field">
                    <label for="bio">Bio:</label>
                    <textarea wire:model="bio" placeholder="Bio" id="bio"></textarea>
                </div>

                <div class="modal_actions">
                    <button type="submit" class="save_btn">Save</button>
                    <button type="button" class="cancel_btn" onclick="closeModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/myprofilepage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/my_profile.js') }}" defer></script>
@endpush
