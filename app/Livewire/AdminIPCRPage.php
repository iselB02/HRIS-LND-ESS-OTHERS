<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\IPCRModel;
use Livewire\WithPagination;

#[Layout("layouts.humanResources")]
class AdminIPCRPage extends Component
{
    use WithPagination;

    public $searchQuery;
    public $ipcrSearch = [];
    public $sortBy = 'name'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction
    public function render()
    {
        $ipcrs = IPCRModel::when($this->searchQuery, function ($query) {
            $query->where('name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%');
        })
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(10); // Adjust the pagination count as needed
        
        return view('livewire.admin-ipcr-page', [
            'ipcrs' => $ipcrs,
        ]);
    }

       // Method to handle sorting
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
            $this->ipcrSearch = IPCRModel::where('name', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('published_date', 'like', '%' . strval($this->searchQuery) . '%')
                                         ->get();
        } else {
            // Reset ipcrSearch if search query is empty
            $this->reset('ipcrSearch');
        }
    }
    
    public function delete($id)
    {
        $item = IPCRModel::find($id);
        $item->delete();
    }
}


