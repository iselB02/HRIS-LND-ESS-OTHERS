<div class="my_profile_container">
    <div class="my_profile_main">
        <div class="main_user_details">
            <div id="cover-photo">
                <img alt="Cover Photo" class="cover_photo">
                <div class="side_edit">
                    <button class="edit_info">Edit Info</button>
                </div>
            </div>
            <div class="user_info">
                <p id="name">{{ $profile->name }}</p>
                <p class="info">Studied at {{ $profile->school }}</p>
                <p class="info">{{ $profile->phone_number }}</p>
            </div>
            <div id="profile-photo">
                <img alt="Profile Picture" class="profile_picture">
            </div>
        </div>
        <div class="main_about">
            <p>{{ $profile->bio }}</p>
        </div>
        <div class="main_seminars_tag">
            <table>
                <thead>
                    <th>Title</th>
                    <th>Organization</th>
                    <th>Date</th>
                    <th>Location</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Effective Leadership</td>
                        <td>Leadership Institute</td>
                        <td>January 10, 2023</td>
                        <td>Conference Room A</td>
                    </tr>
                    <tr>
                        <td>Digital Marketing Trends</td>
                        <td>Marketing Pro</td>
                        <td>February 5, 2023</td>
                        <td>Virtual Event</td>
                    </tr>
                    <tr>
                        <td>Project Management Basics</td>
                        <td>Project Masters</td>
                        <td>January 10, 2023</td>
                        <td>Training Center B</td>
                    </tr>
                    <tr>
                        <td>Communication Skills</td>
                        <td>Communication Hub</td>
                        <td>April 15, 2023</td>
                        <td>Seminar Hall</td>
                    </tr>
                    <tr>
                        <td>Data Analytics Workshop</td>
                        <td>Data Insights</td>
                        <td>May 8, 2023</td>
                        <td>Innovation Lab</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div wire:ignore id="editProfileModal" class="edit_profile_modal">
        <div class="modal_content">
            <form wire:submit.prevent="updateProfile">
                <span class="close">&times;</span>
                
                <div class="current_image">
                    <img alt="Current Profile Picture" id="currentProfilePic">
                </div>

                <div class="edit_field">
                    <input wire:model="profile_photo" type="file" id="profile_pic">
                </div>

                <div class="current_image">
                    <img   alt="Current Cover Photo" id="currentCoverPhoto">
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
                    <button type="button" class="cancel_btn">Cancel</button>
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

