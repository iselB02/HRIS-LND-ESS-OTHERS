<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\PermitToStudyModel;

#[Layout("layouts.humanResources")]

class AdminPermittoStudyPage extends Component
{
    public $records;

    public function mount() {
        $this->records = PermitToStudyModel::all();
    }
    public function render()
    {
        return view('livewire.admin-permitto-study-page');
    }
}
