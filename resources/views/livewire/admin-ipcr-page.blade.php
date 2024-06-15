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
                         <button wire:click="sortData('employee_name', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                      </span>
                      <span>
                          <button wire:click="sortData('employee_name', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                      </span>
                 </th>
            
                 <th>
                    <span>Position</span>
                    <span>
                       <button wire:click="sortData('position', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                    </span>
                    <span>
                        <button wire:click="sortData('position', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                    </span>
                </th>

                 <th>
                     <span>IPCR Ratings</span>
                     <span>
                         <button wire:click="sortData('final_average_rating', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                      </span>
                      <span>
                          <button wire:click="sortData('final_average_rating', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                      </span>
                 </th>
 
                 <th>
                     <span>Date</span>
                     <span>
                         <button wire:click="sortData('created_at', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                      </span>
                      <span>
                          <button wire:click="sortData('created_at', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                      </span>
                 </th>
                 <th>Actions</th>
             </tr>
             @if (!empty($searchQuery) && $ipcrSearch->isNotEmpty())
                 @foreach ($ipcrSearch as $ipcr)
                     <tr>
                         <td>{{ $ipcr->employee_name }}</td>
                         <td>{{ $ipcr->position }}</td>
                         <td>{{ $ipcr->final_average_rating }}</td>
                         <td>{{ $ipcr->created_at->format('F j, Y') }}</td>
                         <td>
                             <button id="download">
                                 <img wire:click.prevent="delete({{ $ipcr->reference_num }})" src="{{ asset('images/downloadBtn.png') }}" alt="Download Icon" class="download_icon">
                             </button>   
                             <button id="delete">
                                 <img wire:click="delete({{$ipcr->reference_num}})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                             </button>
                             <button class="view" wire:click="download({{$ipcr->reference_num}})">
                                 <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                             </button>
                         </td>
                     </tr>
                 @endforeach
             @else
                 @foreach ($ipcrs as $ipcr)
                     <tr>
                         <td>{{ $ipcr->employee_name }}</td>
                         <td>{{ $ipcr->position }}</td>
                         <td>{{ $ipcr->final_average_rating}}</td>
                         <td>{{ $ipcr->created_at->format('F j, Y')}}</td>
                         <td>
                             <button id="delete">
                                 <img wire:click.prevent="delete({{ $ipcr->reference_num }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                             </button>
                             <button class="view" wire:click="download({{$ipcr->reference_num}})">
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
 
<!--     <div class="view-file">
         <div id="view-btns">
             <button id="close">Close</button>
         </div>
         <iframe  type="application/pdf" width="100%" height="600px" frameborder="0"></iframe>
     </div>-->
 </div>
 
 @push('styles')
     <link rel="stylesheet" href="{{ asset('css/admin-ipcr.css') }}">
 @endpush
 
 <!--@push('scripts')
     <script src="{{ asset('js/admin-ipcr.js') }}" defer></script>
 @endpush-->
 