<div class="permit_to_study_main_container">
    <div class="permit_to_study_main">
        <form wire:submit.prevent="submit_pts_forms">
            <div class="submitbutton">
                <button id="submitfile" type="submit">Submit</button>
            </div>

            <!-- Clickable Items with File Inputs -->
            <div class="clickable-item" data-file-input="coverMemoInput" onclick="handleClick(this)">
                Cover Memo
                <input wire:model='CoverMemo' type="file" style="display: none;" id="coverMemoInput" name="coverMemoInput" onchange="handleFileChange(this)">
                <span id="coverMemoFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="requestLetterInput" onclick="handleClick(this)">
                Request Letter
                <input wire:model='RequestLetter' type="file" style="display: none;" id="requestLetterInput" name="requestLetterInput" onchange="handleFileChange(this)">
                <span id="requestLetterFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="permitToStudyInput" onclick="handleClick(this)">
                Permit To Study
                <input wire:model='PermitToStudy' type="file" style="display: none;" id="permitToStudyInput" name="permitToStudyInput" onchange="handleFileChange(this)">
                <span id="permitToStudyFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="teachingAssignmentInput" onclick="handleClick(this)">
                Teaching Assignment
                <input wire:model='TeachingAssignment' type="file" style="display: none;" id="teachingAssignmentInput" name="teachingAssignmentInput" onchange="handleFileChange(this)">
                <span id="teachingAssignmentFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="summaryOfScheduleInput" onclick="handleClick(this)">
                Summary of Schedule
                <input wire:model='SummaryOfSchedule' type="file" style="display: none;" id="summaryOfScheduleInput" name="summaryOfScheduleInput" onchange="handleFileChange(this)">
                <span id="summaryOfScheduleFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="certificationOfGradesInput" onclick="handleClick(this)">
                Certification of Grades
                <input wire:model='CertificationOfGrades' type="file" style="display: none;" id="certificationOfGradesInput" name="certificationOfGradesInput" onchange="handleFileChange(this)">
                <span id="certificationOfGradesFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="studyPlanInput" onclick="handleClick(this)">
                Study Plan
                <input wire:model='StudyPlan' type="file" style="display: none;" id="studyPlanInput" name="studyPlanInput" onchange="handleFileChange(this)">
                <span id="studyPlanFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="facultyEvaluationInput" onclick="handleClick(this)">
                Student's Faculty Evaluation
                <input wire:model='FacultyEvaluation' type="file" style="display: none;" id="facultyEvaluationInput" name="facultyEvaluationInput" onchange="handleFileChange(this)">
                <span id="facultyEvaluationFileName" class="file-name"></span>
            </div>
            <div class="clickable-item" data-file-input="ratedIPCRInput" onclick="handleClick(this)">
                Rated IPCR
                <input wire:model='RatedIPCR' type="file" style="display: none;" id="ratedIPCRInput" name="ratedIPCRInput" onchange="handleFileChange(this)">
                <span id="ratedIPCRFileName" class="file-name"></span>
            </div>
        </form>
    </div>

    <div class="permit_to_study_side">
        <div class="checklist">
            <!-- Legend -->
            <div class="legend">
                <p>Legend:</p>
                <ul>
                    <li><span class="pending-color"></span> Pending</li>
                    <li><span class="send-again-color"></span> Send Again</li>
                    <li><span class="wrong-document-color"></span> Wrong Document</li>
                    <li><span class="accepted-color"></span> Accepted</li>
                </ul>
            </div>

            <!-- Checklist Items -->
            <div class="file-checkbox">
                <button id="coverMemoCheckbox" class="check" onclick="changeStatus(this)" aria-label="Cover Memo"></button>
                <label for="coverMemoCheckbox">Cover Memo</label>
            </div>
            <div class="file-checkbox">
                <button id="requestLetterCheckbox" class="check" onclick="changeStatus(this)" aria-label="Request Letter"></button>
                <label for="requestLetterCheckbox">Request Letter</label>
            </div>
            <div class="file-checkbox">
                <button id="permitToStudyCheckbox" class="check" onclick="changeStatus(this)" aria-label="Permit To Study"></button>
                <label for="permitToStudyCheckbox">Permit To Study</label>
            </div>
            <div class="file-checkbox">
                <button id="teachingAssignmentCheckbox" class="check" onclick="changeStatus(this)" aria-label="Teaching Assignment"></button>
                <label for="teachingAssignmentCheckbox">Teaching Assignment</label>
            </div>
            <div class="file-checkbox">
                <button id="summaryOfScheduleCheckbox" class="check" onclick="changeStatus(this)" aria-label="Summary of Schedule"></button>
                <label for="summaryOfScheduleCheckbox">Summary of Schedule</label>
            </div>
            <div class="file-checkbox">
                <button id="certificationOfGradesCheckbox" class="check" onclick="changeStatus(this)" aria-label="Certification of Grades"></button>
                <label for="certificationOfGradesCheckbox">Certification of Grades</label>
            </div>
            <div class="file-checkbox">
                <button id="studyPlanCheckbox" class="check" onclick="changeStatus(this)" aria-label="Study Plan"></button>
                <label for="studyPlanCheckbox">Study Plan</label>
            </div>
            <div class="file-checkbox">
                <button id="facultyEvaluationCheckbox" class="check" onclick="changeStatus(this)" aria-label="Student's Faculty Evaluation"></button>
                <label for="facultyEvaluationCheckbox">Student's Faculty Evaluation</label>
            </div>
            <div class="file-checkbox">
                <button id="ratedIPCRCheckbox" class="check" onclick="changeStatus(this)" aria-label="Rated IPCR"></button>
                <label for="ratedIPCRCheckbox">Rated IPCR</label>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/permittostudypage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/permittostudypage.js') }}" defer></script>
@endpush
