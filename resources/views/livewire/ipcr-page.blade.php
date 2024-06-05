<div class="main_ipcr">
    <div class="opcr-banner">
        <img id="opcr_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="opcr-h1">Individual Performance Commitment and Review</h1>
    </div>
    <div class="ipcr_table">
        <div id="top_menu">
            <button id="new_ipcr">Add IPCR</button>
        </div>
        <table id="submission_table">
            <thead>
                <tr>
                    <th>Submission Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ipcrs as $ipcr)
                <tr>
                    <td>{{ $ipcr->created_at->format('F j, Y') }}</td>
                    <td>{{ $ipcr->status }}</td>
                    <td>
                        <button id="delete">
                            <img src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                        </button>
                        <button class="view"  wire:click="download">
                            <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                        </button>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form wire:submit.prevent="submitForm" id="ipcr_view" wire:ignore.self>
        <div id="title">
            <h1>INDIVIDUAL PERFORMANCE COMMITMENT FORM (IPCR) PERFORMANCE MEASURES</h1>
        </div>
        <div id="ipcr_form">
            <div id="personal_info">
                <label for="emp_name">Name:</label>
                <input wire:model="emp_name" type="text" name="employee_name" id="emp_name">
                <label for="colDept">College/Department:</label>
                <input wire:model="collegeDepartment" type="text" name="collegeDepartment" id="colDept">
                <label for="position">Position:</label>
                <input wire:model="position" type="text" name="position" id="position">
                <label for="startPrd">Start Period:</label>
                <input wire:model="start_period" type="date" name="start_period" id="startPrd">
                <label for="endPrd">End Period:</label>
                <input wire:model="end_period" type="date" name="end_period" id="endPrd">
                <label for="deptHead">Department Head:</label>
                <input wire:model="department_head" type="text" name="deptHead" id="deptHead">
                <label for="type">Type:</label>
                <select wire:model="type" name="type" id="type">
                    <option value="">IPCR type</option>
                    <option value="target">Target</option>
                    <option value="rated">Rated</option>
                </select>
            </div>
            <div id="rating_basis">
                <h3>5-Outstanding, 4-Very Satisfactory, 3-Satisfactory, 2-Unsatisfactory, 1-Poor</h3>
            </div>
            <div id="rating">
                <table id="core_funct">
                    <thead>
                        <tr>
                            <th id="num">#</th>
                            <th>OUTPUT</th>
                            <th>SUCCESS INDICATORS (TARGETS + MEASURES)</th>
                            <th>ACTUAL ACCOMPLISHMENTS</th>
                            <th colspan="4">RATING</th>
                        </tr>
                        <tr>
                            <th colspan="4"></th>
                            <th>Q</th>
                            <th>E</th>
                            <th>T</th>
                            <th>A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="section-title">I. CORE FUNCTIONS 80%</td>
                        </tr>
                        @foreach($coreFunctionRows as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><input type="text" wire:model="coreFunctionRows.{{ $index }}.output" class="output"></td>
                            <td><input type="text" wire:model="coreFunctionRows.{{ $index }}.success_indicators" class="success_indicators"></td>
                            <td><input type="text" wire:model="coreFunctionRows.{{ $index }}.actual_accomplishments" class="actual_accomplishments"></td>
                            <td>
                                <select wire:model="coreFunctionRows.{{ $index }}.q" name="q">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="coreFunctionRows.{{ $index }}.e" name="e">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="coreFunctionRows.{{ $index }}.t" name="t">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="coreFunctionRows.{{ $index }}.a" name="a">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td class="removeBtn" >
                                <button type="button" wire:click="removeSupRow({{ $index }})"><img src="{{ asset('images/deleteBtn.png') }}" alt="View Icon" class="view_icon"></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" id="addRowCore" wire:click="addCoreRow">Add</button>
                <table id="sup_func">
                    <tbody>
                        <tr>
                            <td colspan="8" class="section-title">II. SUPPORT TO FUNCTIONS 20%</td>
                        </tr>
                        @foreach($supFunctionRows as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><input type="text" wire:model="supFunctionRows.{{ $index }}.output" class="output"></td>
                            <td><input type="text" wire:model="supFunctionRows.{{ $index }}.success_indicators" class="success_indicators"></td>
                            <td><input type="text" wire:model="supFunctionRows.{{ $index }}.actual_accomplishments" class="actual_accomplishments"></td>
                            <td>
                                <select wire:model="supFunctionRows.{{ $index }}.q" name="q">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="supFunctionRows.{{ $index }}.e" name="e">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="supFunctionRows.{{ $index }}.t" name="t">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td>
                                <select wire:model="supFunctionRows.{{ $index }}.a" name="a">
                                    <option selected>Pick</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                            <td  class="removeBtn" ><button type="button" wire:click="removeSupRow({{ $index }})"><img src="{{ asset('images/deleteBtn.png') }}" alt="View Icon" class="view_icon"></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" id="addRowSup" wire:click="addSupRow">Add</button>
                <h3 id="legends">Legend: Q - Quality   E - Efficiency/Quantity   T - Time Standard   A - Average</h3>
            </div>
            <div id="approval_details">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <label for="filing_date">Filing Date</label>
                            </td>
                            <td>
                                <input wire:model="filing_date" type="date" name="filing_date" id="filing_date">
                            </td>
                            <td>
                                <label for="signature">Signature:</label>
                            </td>
                            <td>
                                <input wire:model="signature" type="file" name="signature" id="signature">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="certBy">Certified By</label>
                            </td>
                            <td>
                                <input wire:model="certified_by" type="text" name="certBy" id="certBy">
                            </td>
                            <td>
                                <label for="cert_date">Certification Date</label>
                            </td>
                            <td>
                                <input wire:model="certification_date" type="date" name="cert_date" id="cert_date">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="appBy">Approved By</label>
                            </td>
                            <td>
                                <input wire:model="appBy" type="text" name="appBy" id="appBy">
                            </td>
                            <td>
                                <label for="app_date">Approval Date</label>
                            </td>
                            <td>
                                <input wire:model="app_date" type="date" name="app_date" id="app_date">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="application_form">Application Form:</label>
                            </td>
                            <td>
                                <input wire:model="application_form" type="file" name="application_form" id="application_form">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <label id="comRecoLabel" for="comments_reco">Comments and Recommendations:</label>
                <textarea wire:model="comments_reco" name="comments_reco" id="comments_reco" cols="130" rows="5"></textarea>
            </div>
            <div id="bottom_menu">
                <button id="submit" type="submit">Submit</button>
                <button type="button" id="cancel">Cancel</button>
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

