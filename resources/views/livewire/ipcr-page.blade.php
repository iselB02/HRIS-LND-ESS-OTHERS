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
                    <tr>
                        <td>June 02, 2024</td>
                        <td>Pending</td>
                        <td>
                            <button id="delete">
                                <img  src="{{ asset('images/deleteBtn.png') }}" alt="Delete Icon" class="delete_icon">
                            </button>
                            <button class="view">
                                <img src="{{ asset('images/viewBtn.png') }}" alt="View Icon" class="view_icon">
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <form action="" id="ipcr_view">
        <div id="title">
            <h1>INDIVIDUAL PERFORMANCE COMMITMENT FORM (IPCR) PERFORMANCE MEASURES</h1>
        </div>
        <div id="ipcr_form">
            <div id="personal_info">
                <label for="emp_name">Name:</label>
                <input type="text" name="employee_name" id="emp_name">
                <label for="colDept">College/Department:</label>
                <input type="text" name="collegeDepartment" id="colDept">
                <label for="position">Position:</label>
                <input type="text" name="position" id="position">
                <label for="startPrd">Start Period:</label>
                <input type="date" name="start_period" id="startPrd">
                <label for="endPrd">End Period:</label>
                <input type="date" name="end_period" id="endPrd">
            </div>
            <div id="rating_basis">
                <h3>5-Outstanding, 4-Very Satisfactory, 3-Satisfactory, 2-Unsatisfactory, 1-Poor</h3>
            </div>
            <div id="rating">
                <table id="core_funct">
                    <thead>
                        <tr>
                            <th>OUTPUT</th>
                            <th>SUCCESS INDICATORS (TARGETS + MEASURES)</th>
                            <th>ACTUAL ACCOMPLISHMENTS</th>
                            <th colspan="4">RATING</th>
                        </tr>
                        <tr>
                            <th colspan="3"></th>
                            <th>Q</th>
                            <th>E</th>
                            <th>T</th>
                            <th>A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="section-title">I. CORE FUNCTIONS 80%</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="output" class="output"></td>
                            <td><input type="text" name="success_indicators" class="success_indicators"></td>
                            <td><input type="text" name="actual_accomplishments" class="actual_accomplishments"></td>
                            <td><input type="text" name="rating_q" class="rating_q"></td>
                            <td><input type="text" name="rating_e" class="rating_e"></td>
                            <td><input type="text" name="rating_t" class="rating_t"></td>
                            <td><input type="text" name="rating_a" class="rating_a"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" id="addRowCore">Add</button>
                <table id="sup_func">
                    <tbody>
                        <tr>
                            <td colspan="7" class="section-title">I. SUPPORT TO FUNCTIONS 20%</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sup_output" class="sup_output"></td>
                            <td><input type="text" name="sup_sucInd" class="sup_success_sucInd"></td>
                            <td><input type="text" name="sup_actAccomp" class="sup_actAccomp"></td>
                            <td><input type="text" name="sup_rating_q" class="sup_rating_q"></td>
                            <td><input type="text" name="sup_rating_e" class="sup_rating_e"></td>
                            <td><input type="text" name="sup_rating_t" class="sup_rating_t"></td>
                            <td><input type="text" name="sup_rating_a" class="sup_rating_a"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" id="addRowSup">Add</button>
                <h3 id="legends">Legend: Q - Quality   E - Effiency/Quantity   T - Time Standard   A - Average</h3>
            </div>
            <div id="approval_details">
                <table>
                    <tbody>
                        <tr >
                            <td >
                                <label for="filing_date">Filing Date</label>
                            </td>
                            <td>
                                <input type="date" name="filing_date" id="filing_date">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="certBy">Certified By</label>
                            </td>
                            <td>
                                <input type="text" name="certBy" id="certBy">
                            </td>
                            <td>
                                <label for="cert_date">Certification Date</label>
                            </td>
                            <td>
                                <input type="date" name="cert_date" id="cert_date">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="appBy">Approved By</label>
                            </td>
                            <td>
                                <input type="text" name="appBy" id="appBy">
                            </td>
                            <td>
                                <label for="app_date">Approval Date</label>
                            </td>
                            <td>
                                <input type="date" name="app_date" id="app_date">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="bottom_menu">
                <button type="submit">Submit</button>
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