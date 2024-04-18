<div class="permit_to_study_main_container">
    <div class="permit_to_study_main">
        <div class="clickable-item" onclick="handleClick('coverMemo')">Cover Memo</div>
        <div class="clickable-item" onclick="handleClick('requestLetter')">Request Letter</div>
        <div class="clickable-item" onclick="handleClick('permitToStudy')">Permit To Study</div>
        <div class="clickable-item" onclick="handleClick('teachingAssignment')">Teaching Assignment</div>
        <div class="clickable-item" onclick="handleClick('summaryOfSchedule')">Summary of Schedule</div>
        <div class="clickable-item" onclick="handleClick('certificationOfGrades')">Certification of Grades</div>
        <div class="clickable-item" onclick="handleClick('studyPlan')">Study Plan</div>
        <div class="clickable-item" onclick="handleClick('facultyEvaluation')">Student's Faculty Evaluation</div>
        <div class="clickable-item" onclick="handleClick('ratedIPCR')">Rated IPCR</div>
    </div>
    <div class="permit_to_study_side">
        <div class="checklist">
            <div class="file-checkbox">
                <input type="checkbox" id="coverMemoCheckbox" name="coverMemoCheckbox">
                <label for="coverMemoCheckbox">Cover Memo</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="requestLetterCheckbox" name="requestLetterCheckbox">
                <label for="requestLetterCheckbox">Request Letter</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="permitToStudyCheckbox" name="permitToStudyCheckbox">
                <label for="permitToStudyCheckbox">Permit To Study</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="teachingAssignmentCheckbox" name="teachingAssignmentCheckbox">
                <label for="teachingAssignmentCheckbox">Teaching Assignment</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="summaryOfScheduleCheckbox" name="summaryOfScheduleCheckbox">
                <label for="summaryOfScheduleCheckbox">Summary of Schedule</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="certificationOfGradesCheckbox" name="certificationOfGradesCheckbox">
                <label for="certificationOfGradesCheckbox">Certification of Grades</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="studyPlanCheckbox" name="studyPlanCheckbox">
                <label for="studyPlanCheckbox">Study Plan</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="facultyEvaluationCheckbox" name="facultyEvaluationCheckbox">
                <label for="facultyEvaluationCheckbox">Student's Faculty Evaluation</label>
            </div>
            <div class="file-checkbox">
                <input type="checkbox" id="ratedIPCRCheckbox" name="ratedIPCRCheckbox">
                <label for="ratedIPCRCheckbox">Rated IPCR</label>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/permittostudypage.css') }}">
@endpush