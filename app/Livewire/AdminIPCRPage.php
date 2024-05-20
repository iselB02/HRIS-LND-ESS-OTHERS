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

    protected $updatesQueryString = ['sortBy', 'sortDirection'];
    public function render()
    {
        $query = IPCRModel::query();

        if (!empty($this->searchQuery)) {
            $query->where('name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%');
        }

        $query->orderBy($this->sortBy, $this->sortDirection);
        $ipcrs = $query->paginate(10);

        return view('livewire.admin-ipcr-page', [
            'ipcrs' => $ipcrs,
        ]);
    }

    public function search()
    {
        if (!empty($this->searchQuery)) {
            $this->ipcrSearch = IPCRModel::where('name', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('officedepartment', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('average', 'like', '%' . $this->searchQuery . '%')
                                         ->orWhere('published_date', 'like', '%' . $this->searchQuery . '%')
                                         ->get();
        } else {
            // Reset ipcrSearch if search query is empty
            $this->reset('ipcrSearch');
        }
    }
    
}


