<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\PermitToStudyModel;

#[Layout("layouts.humanResources")]

class AdminPermittoStudyPage extends Component
{

    public $searchQuery;
    public $permitToStudySearch = [];
    
    public function delete($id)
    {
        $item = PermitToStudyModel::find($id);
        $item->delete();
    }

    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->permitToStudySearch = PermitToStudyModel::Where('status', 'like', '%' . $this->searchQuery . '%')
                ->orWhere('title', 'like', '%' . $this->searchQuery . '%')
                ->get();
        } else {
            // Reset permitToStudySearch if search query is empty
            $this->reset('permitToStudySearch');
        }

        dd($this->searchQuery);
    }
    public function render()
    {
        $records = PermitToStudyModel::paginate(10); // Adjust the number as needed
        return view('livewire.admin-permitto-study-page', ['records' => $records]);
    }
}
