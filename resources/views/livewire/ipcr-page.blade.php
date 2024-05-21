<div class="ipcr-container">
    <div class="ipcr-banner">
        <img id="ipcr_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="ipcr-h1">Individual Performance Commitment and Review</h1>
    </div>
    <form wire:submit.prevent="submit_ipcrForm">
    <div class="ipcr-main">
        <div id="ipcr-col1">
            <h2>Attach IPCR File</h2>
            <img id="fileattach-icon" src="{{ asset('images/attach-file.png') }}" alt="plm">
            <label ><input wire:model="application_form" type="file"></label>
        </div>
        <div id="ipcr-col2">
            <h2>Encode IPCR Targets</h2>
            <table>
                <tbody>
                    <tr>
                        <td><h3>Distribution/dissemination and discussion of syllabus with the students by the end of the first week of classes</h3></td>
                        <td><h3>100% distribution/
                            dissemination and discussion of the syllabus with the students by the end of the first week of classes in all assigned subjects.</h3></td>
                    </tr>
                    <tr>
                        <td><h3>Application of various teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                        <td><h3>50% application of the identified teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="ipcr-col3">
            <h2>Encode IPCR ratings</h2>
            <div id="office">
                    <select wire:model="officedepartment" name="office" id="office" >   
                        <option value="" >Select Office/Department</option>
                        <option value="Board of Regents">Board of Regents</option>
                        <option value="PLM office of the President">PLM office of the President</option>
                        <option value="Office of the Registrar">Office of the Registrar</option>
                        <option value="Admission">Admission</option>
                        <option value="Office of the Executive Preisdent">Office of the Executive Preisdent</option>
                        <option value="Office of the Vice President for Academic Support Units">Office of the Vice President for Academic Support Units</option>
                        <option value="Office of University Legal Council">Office of University Legal Council</option>
                        <option value="Office of the Vice President for Information and Communications">Office of the Vice President for Information and Communications</option>
                        <option value="Office of the Vice President for Administration">Office of the Vice President for Administration</option>
                        <option value="Office of the Vice President for Finance">Office of the Vice President for Finance</option>
                        <option value="Cash Office/Treasury">Cash Office/Treasury</option>
                        <option value="Budget Office">Budget Office</option>
                        <option value="Internal Audit Office">Internal Audit Office</option>
                        <option value="Information and Communications Technology Office">Information and Communications Technology Office</option>
                        <option value="Office of Guidance and Testing Services">Office of Guidance and Testing Services</option>
                        <option value="Office of Student and Development Services">Office of Student and Development Services</option>
                        <option value="University Library">University Library</option>
                        <option value="University Research Center">University Research Center</option>
                        <option value="Center for University Extension Service">Center for University Extension Service</option>
                        <option value="University Health Service">University Health Service</option>
                        <option value="National Service Training Program">National Service Training Program</option>
                        <option value="Human Resource Development Office">Human Resource Development Office</option>
                        <option value="Procurement Office">Procurement Office</option>
                        <option value="Property and Supplies Office">Property and Supplies Office</option>
                        <option value="Physical Facilities Management Office">Physical Facilities Management Office</option>
                        <option value="University Security Office">University Security Office</option>
                        <option value="College of Architecture and Urban Planning">College of Architecture and Urban Planning</option>
                        <option value="College of Engineering and Technology">College of Engineering and Technology</option>
                        <option value="College of Education">College of Education</option>
                        <option value="College of Humanities, Arts and Social Science">College of Humanities, Arts and Social Science </option>
                        <option value="College of Nursing">College of Nursing</option>
                        <option value="College of Physical Therapy">College of Physical Therapy</option>
                        <option value="College of Science">College of Science</option>
                        <option value="College of Law">College of Law</option>
                        <option value="College of Medicine">College of Medicine</option>
                        <option value="PLM Business School">PLM Business School</option>
                        <option value="Graduate School of Law">Graduate School of Law</option>
                        <option value="School of Public Health">School of Public Health</option>
                        <option value="School of Government">School of Government</option>
                    </select>
            </div>
            <div class="name">
                <label >Full Name: <input wire:model="name" type="text"></label>
            </div>
            <div class="position">
                <label >Position: <input wire:model="position" type="text"></label>
            </div>
            <div class="average">
                <label >Average: <input wire:model="average" type="text"></label>
            </div>
            
            <div><button type="submit">Submit</button></div>
        </div>
        
    </div>
</form>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/ipcrpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/ipcrpage.js') }}" defer></script>
@endpush
