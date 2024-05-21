<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProfileModel;

#[Layout("layouts.humanResources")]

class AdminView extends Component
{

    use WithFileUploads;

    public $name;

    public $school;
    public $phone_number;
    public $bio;
    public $profile;
    public $profile_photo;
    public $cover_photo;

    public function render()
    {
        return view('livewire.admin-view', [
            'profile' => $this->profile,
        ]);
    }

    
    
    protected $rules = [
        'profile.name' => 'required|string',
        'profile.school' => 'required|string',
        'profile.phone_number' => 'required|string',
        'profile.bio' => 'required|string',
        'profile_photo' => 'nullable|image|max:1024',
        'cover_photo' => 'nullable|image|max:2048',
    ];

    public function mount($id=4)
    {
        $this->profile = ProfileModel::findOrFail($id);
        $this->name =  $this->profile->name;
        $this->school =  $this->profile->school;
        $this->phone_number =  $this->profile->phone_number;
        $this->bio =  $this->profile->bio;
    }

    public function updateProfile()
    {
        $this->validate();

        if ($this->profile_photo) {
            $this->profile->profile_photo = $this->profile_photo->store('profile-photos', 'public');
        }

        if ($this->cover_photo) {
            $this->profile->cover_photo = $this->cover_photo->store('cover-photos', 'public');
        }

        $this->profile->save();

        session()->flash('message', 'Profile updated successfully.');
    }
}
