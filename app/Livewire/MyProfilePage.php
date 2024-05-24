<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use App\Models\ProfileModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

#[Layout("layouts.employeePortal")]
// Title here
class MyProfilePage extends Component
{
    use WithFileUploads;

    public $name;
    public $school;
    public $phone_number;
    public $bio;
    public $profile;
    public $profile_photo;
    public $cover_photo;

    protected $rules = [
        'name' => 'required|string|max:255',
        'school' => 'nullable|string|max:255',
        'phone_number' => 'nullable|string|max:20',
        'bio' => 'nullable|string|max:2000',
        'profile_photo' => 'nullable|image|max:1024',
        'cover_photo' => 'nullable|image|max:2048',
    ];

    public function mount($id = 4)
    {
        $this->profile = ProfileModel::findOrFail($id);
        $this->name = $this->profile->name;
        $this->school = $this->profile->school;
        $this->phone_number = $this->profile->phone_number;
        $this->bio = $this->profile->bio;
    }

    public function updateProfile()
    {
        $validatedData = $this->validate();

        Log::info('Validated Data: ', $validatedData);

        DB::beginTransaction();

        try {
            $this->profile->name = $validatedData['name'];
            $this->profile->school = $validatedData['school'];
            $this->profile->phone_number = $validatedData['phone_number'];
            $this->profile->bio = $validatedData['bio'];

            if ($this->profile_photo) {
                $path = $this->profile_photo->store('profile-photos', 'public');
                if ($this->profile->profile_photo) {
                    Storage::disk('public')->delete($this->profile->profile_photo);
                }
                $this->profile->profile_photo = $path;
            }

            if ($this->cover_photo) {
                $path = $this->cover_photo->store('cover-photos', 'public');
                if ($this->profile->cover_photo) {
                    Storage::disk('public')->delete($this->profile->cover_photo);
                }
                $this->profile->cover_photo = $path;
            }

            Log::info('Profile Data before saving: ', $this->profile->toArray());

            $this->profile->save();

            DB::commit();

            Log::info('Profile updated successfully.');

            session()->flash('message', 'Profile updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating profile: ' . $e->getMessage());
            session()->flash('error', 'Failed to update profile.');
        }
    }
    public function render()
    {
        return view('livewire.my-profile-page');
    }
}
