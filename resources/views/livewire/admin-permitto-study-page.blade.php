<div class="admin-permittostudy-container">
    <div class="top-menu">
         <input type="search" name="search" id="search-permittostudy-request" placeholder="Search">
         <button id="print">Print</button>
         <select name="export-menu" id="export" >
             <option value="" disabled selected>Export</option>
             <option value="opt1">.PDF</option>
             <option value="opt2">.Docs</option>
             <option value="opt3">.CSV</option>
         </select>
    </div>
    <div class="display-permit-to-study">
         <table>
             <tr>
                 <th>Name</th>
                 <th>Office</th>
                 <th>Date</th>
                 <th>Type</th>
             </tr>
             
             <tr>
                 <td>Juan Dela Cruz</td>
                 <td>Office of the Registrar</td>
                 <td>March 10, 2024</td>
                 <td>.PDF
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
             <tr>
                 <td>Mary Anne Ramos</td>
                 <td>Office of the Executive Preisdent</td>
                 <td>March 5, 2024</td>
                 <td>.Docs
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
             <tr>
                 <td>Michael Gervacio</td>
                 <td>Office of University Legal Council</td>
                 <td>February 25, 2024</td>
                 <td>.PDF
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
             <tr>
                 <td>John Lacson</td>
                 <td>Internal Audit Office</td>
                 <td>February 10, 2024</td>
                 <td>.PDF
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
         </table>
    </div>
    <div class="view-file">
        <div id="view-btns">
            <button id="close">Close</button>
        </div>
        <iframe src="{{  asset('documents/scholarship.pdf') }}" frameborder="0"></iframe>
    </div>
 </div>
 
 
 @push('styles')
     <link rel="stylesheet" href="{{ asset('css/admin-permittostudy.css') }}">
 @endpush
 
 @push('scripts')
     <script src="{{ asset('js/admin-permittostudy.js') }}" defer></script>
 @endpush
 
