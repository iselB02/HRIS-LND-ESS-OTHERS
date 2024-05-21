<div class="admin-ipcr-container">
   <div class="top-menu">
    <input wire:model.defer="searchQuery" wire:keydown.enter="search" type="search" id="search-ipcr" placeholder="Search ...">
</select>

</div>
    <div class="display-ipcr">
        <table>
            <tr>
                <th>
                    <span>Name</span>
                    <span>
                        <button wire:click="sortData('name', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('name', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                
                <th>
                    <span>Office</span>
                    <span>
                       <button wire:click="sortData('officedepartment', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                    </span>
                    <span>
                        <button wire:click="sortData('officedepartment', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                    </span>
                </th>

                <th>
                    <span>IPCR Ratings</span>
                    <span>
                        <button wire:click="sortData('average', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('average', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>

                <th>
                    <span>Date</span>
                    <span>
                        <button wire:click="sortData('published_date', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                     </span>
                     <span>
                         <button wire:click="sortData('published_date', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                     </span>
                </th>
                <th>Actions</th>
            </tr>
            @if (!empty($searchQuery) && $ipcrSearch->isNotEmpty())
                @foreach ($ipcrSearch as $ipcr)
                    <tr>
                        <td>{{ $ipcr->name }}</td>
                        <td>{{ $ipcr->officedepartment }}</td>
                        <td>{{ $ipcr->average }}</td>
                        <td>{{ $ipcr->published_date }}</td>
                        <td>
                            <button id="download">
                                <img src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                            </button>   
                            <button id="delete">
                                <img wire:click.prevent="delete({{ $ipcr->id }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                            </button>
                            <button class="view">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endforeach
            @else
                @foreach ($ipcrs as $ipcr)
                    <tr>
                        <td>{{ $ipcr->name }}</td>
                        <td>{{ $ipcr->officedepartment }}</td>
                        <td>{{ $ipcr->average }}</td>
                        <td>{{ $ipcr->published_date }}</td>
                        <td>
                            <button id="delete">
                                <img wire:click.prevent="delete({{ $ipcr->id }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                            </button>
                            <button class="view-file-btn" data-file-url="{{ asset('storage/' . $ipcr->application_form) }}">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        <div id="links">
            {{ $ipcrs->links() }}
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-ipcr.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/admin-ipcr.js') }}" defer></script>
@endpush
