<div class="admin-ipcr-container">
    <div class="top-menu">
        <input type="text" wire:model="search" id="search-ipcr" placeholder="Search Users..." />
    <button wire:click="search">Search</button>
         <select wire:model="sortField" name="export-menu" id="export" >
            <option value="" disabled selected>Sort by</option>
            <option value="name">Name</option>
            <option value="officedepartment">Office</option>
            <option value="average">Ratings</option>
            <option value="published_date">Date</option>
         </select>
    </div>
    <div class="display-ipcr">
         <table>
             <tr>
                 <th>Name</th>
                 <th>Office</th>
                 <th>IPCR Ratings</th>
                 <th>Date</th>
                 <th>Actions</th>
             </tr>
             @foreach ($ipcrs as $ipcr)
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
                        <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                    </button>
                    <button class="view">
                       <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                   </button>
                </td>
             </tr>

        <div class="view-file">
        <div id="view-btns">
            <button id="close">Close</button>
        </div>
        <iframe  src="{{ $ipcr->application_form }}}}" type="application/pdf" width="100%" height="600px" frameborder="0"></iframe>
    </div>
    @endforeach
</table>
<div id="links">
   {{ $ipcrs->links() }}
</div>
 </div>
 
 
 @push('styles')
     <link rel="stylesheet" href="{{ asset('css/admin-ipcr.css') }}">
 @endpush
 
 @push('scripts')   
     <script src="{{ asset('js/admin-ipcr.js') }}" defer></script>
 @endpush
 
