<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\ProfileModel;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("layouts.employeePortal")]
// Title here
class MyProfilePage extends Component
{

    use WithFileUploads;

    public $school;
    public $phone_number;
    public $cover_photo;
    public $profile_photo;
    public $bio;
    public $profile;
    public function render()
    {
        return view('livewire.my-profile-page', [
            'profile' => $this->profile,
        ]);
    }

    public function mount($id=1)
    {
        $this->profile = ProfileModel::findOrFail($id);
        $this->school = $this->profile->school;
        $this->phone_number = $this->profile->phone_number;
        $this->bio = $this->profile->bio;
        
    }

    public function updateProfile()
    {
        $this->validate([
            'cover_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:25600', // 25MB Max
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:25600', // 25MB Max
            'phone_number' => ['required', 'string', 'regex:/^(09|\+639)\d{9}$/'],
            'bio' => 'nullable|string|max:2000',
        ]);

        $profileData = [
            'school' => $this->school,
            'phone_number' => $this->phone_number,
            'bio' => $this->bio,
        ];

        if ($this->cover_photo) {
            $profileData['cover_photo'] = $this->cover_photo->storeAs('cover_photos', 'cover_photo_' . $this->profile->id, 'public');
        }
    
        if ($this->profile_photo) {
            $profileData['profile_photo'] = $this->profile_photo->storeAs('profile_photos', 'profile_photo_' . $this->profile->id, 'public');
        }
    

        $this->profile->update($profileData);

        session()->flash('message', 'Profile updated successfully.');

        $this->reset();
    }
}
