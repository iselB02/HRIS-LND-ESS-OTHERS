<div class="admin-opcr-container">
    <div class="top-menu">
     <input wire:model.defer="searchQuery" wire:keydown.enter="search" type="search" id="search-opcr" placeholder="Search ...">
 </select>
 
 </div>
     <div class="display-opcr">
         <table>
             <tr>
                 <th>
                     <span>Status</span>
                 </th>

                 <th>
                     <span>OPCR Ratings</span>
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
                         <button wire:click="sortData('published_date', 'asc')" ><img src="{{ asset('images/arrow_up.png') }}" alt=""></button> 
                      </span>
                      <span>
                          <button wire:click="sortData('published_date', 'desc')" ><img src="{{ asset('images/arrow_down.png') }}" alt=""></button> 
                      </span>
                 </th>
                 <th>Actions</th>
             </tr>
             @if (!empty($searchQuery) && $opcrSearch->isNotEmpty())
                @foreach ($opcrs as $opcr)
                    <tr>
                        <td>{{ $opcr->status }}</td>
                        <td>{{ $opcr->final_average_rating }}</td>
                        <td>{{ $opcr->created_at->format('Y-m-d') }}</td>
                        <td>
                            <button class="delete-btn" >
                                <img wire:click.prevent="delete({{ $opcr->reference_num }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                            </button>
                            <button class="view-btn" wire:click="download">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endforeach
            
             @else
                @foreach ($opcrs as $opcr)
                    <tr>
                        <td>{{ $opcr->status }}</td>
                        <td>{{ $opcr->final_average_rating }}</td>
                        <td>{{ $opcr->created_at->format('Y-m-d') }}</td>
                        <td>
                            <button class="delete-btn" >
                                <img wire:click.prevent="delete({{ $opcr->reference_num }})" src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                            </button>
                            <button class="view-btn" wire:click="download">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                @endforeach
         
             @endif
         </table>
         <div id="links">
             {{ $opcrs->links() }}
         </div>
     </div>
 
     <div class="view-file">
         <div id="view-btns">
             <button id="close">Close</button>
         </div>
         <iframe  type="application/pdf" width="100%" height="600px" frameborder="0"></iframe>
     </div>
 </div>
 
 @push('styles')
     <link rel="stylesheet" href="{{ asset('css/admin-opcr.css') }}">
 @endpush
 
 @push('scripts')
     <script src="{{ asset('js/admin-opcr.js') }}" defer></script>
 @endpush
 