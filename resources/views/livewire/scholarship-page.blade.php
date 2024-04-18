<div class="dashboard_container">
        <div class="scholarship-form-container">
            <h1>Employee Scholarship Application Form</h1>

            <section class="personal-info">
                <h2>I. Personal Information</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="John Doe">

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" placeholder="123456">

                <label for="address">Address:</label>
                <textarea id="address" placeholder="123 Main Street, City, Country"></textarea>
                <br><br>
                <label for="telephone-home">Telephone (Home):</label>
                <input type="tel" id="telephone-home" placeholder="555-1234">

                <label for="telephone-work">Telephone (Work):</label>
                <input type="tel" id="telephone-work" placeholder="555-5678">
                <br><br>
                <label for="employment-status">Are you employed:</label>

                <input type="text" id="employment-status" placeholder="_________________">

                <label for="employment-type">In what department:</label>
                
                <input type="text" id="employment-type" placeholder="_____________________________">
            </section>
            <br>
            <section class="reason-for-application">
                <h2>II. Please specify the reason for your scholarship application.</h2>
            <br>
                <label for="seminar">Seminar:</label>
                <input type="text" id="seminar" placeholder="_________________">

                <label for="conference">Conference:</label>
                <input type="text" id="conference" placeholder="_________________">
                <br><br>
                <label for="return-to-studies">Return to Studies:</label>
                <textarea id="return-to-studies" placeholder="_________________"></textarea>

                <label for="education-program">Continuing Education Program:</label>
                <textarea id="education-program" placeholder="_________________"></textarea>
                <br><br>S
                <label for="convention">Convention:</label>
                <input type="text" id="convention" placeholder="_________________">
                
                <label for="other-reason">Other:</label>
                <input type="text" id="other-reason" placeholder="_________________">
                <br><br>
            </section>

            <section class="training-program">
                <h2>III. Please describe the training program, including the location of the program.</h2>
                <br>
                <textarea id="training-program-description" placeholder="Enter description here..."></textarea>
            </section>
        </div>
    </div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/scholarshippage.css') }}">
@endpush