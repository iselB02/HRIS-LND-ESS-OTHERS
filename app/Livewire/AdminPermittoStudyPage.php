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

        public $sortBy = 'name'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction
    
     public function delete($reference_num)
    {
        $item = PermitToStudyModel::where('reference_num', $reference_num);
        if ($item) {
            $item->delete();
        }

    }

    public function sortData($field, $sortDirection)
       {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
           }
       }
    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->permitToStudySearch = PermitToStudyModel::Where('name', 'like', '%' . $this->searchQuery . '%')
                ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%')
                ->get();
        } else {
            // Reset permitToStudySearch if search query is empty
            $this->reset('permitToStudySearch');
        }
    }
    public function render()
    {
        $records = PermitToStudyModel::orderBy($this->sortBy, $this->sortDirection)
        ->paginate(10); // Adjust the number as needed
        return view('livewire.admin-permitto-study-page', ['records' => $records]);
    }
}
