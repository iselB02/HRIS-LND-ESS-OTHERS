document.addEventListener('DOMContentLoaded', function () {
    var scholarship = document.getElementById('scholarship-form-container');
    var cancel = document.getElementById('cancel');
    var submit = document.getElementById('submit');
    var modal = document.querySelector('.view-file'); // Selects the modal element
    var overlay = document.getElementById('modal-overlay');
    var closeButton = document.getElementById('close');

    function formOpen() {
        scholarship.style.display = 'block';
        overlay.style.display = 'block';
    }

    function formClose() {
        scholarship.style.display = 'none';
        overlay.style.display = 'none';
    }

    cancel.addEventListener('click', formClose);
    submit.addEventListener('click', formClose);

    var scholarshipApplication = document.getElementById('apply');
    scholarshipApplication.addEventListener('click', formOpen);

       // Function to close the modal
       function closeModal() {
        modal.style.display = 'none'; // Hide the modal
        overlay.style.display = 'none'
        
    }

 // Function to open the modal
function openModal(event) {
    var button = event.target.closest('button.view');
    var row = button.closest('tr'); // Get the closest table row to the button

    var fname = row.getAttribute('fname');
    var mname = row.getAttribute('mname');
    var lname = row.getAttribute('lname');
    var address = row.getAttribute('address');
    var postal = row.getAttribute('postal');
    var civil_status = row.getAttribute('civil-status');
    var position = row.getAttribute('position');
    var course = row.getAttribute('course');
    var start = row.getAttribute('start');
    var end = row.getAttribute('end');
    var school = row.getAttribute('school');
    var school_address = row.getAttribute('school-address');
    var type_scholarship = row.getAttribute('type');
    var office = row.getAttribute('office');
    var remarks = row.getAttribute('remarks');

    document.getElementById('detail-name').textContent = 'Full Name: ' + fname + ' ' + mname + ' ' + lname;
    document.getElementById('detail-address').textContent = 'Home Address: ' + address;
    document.getElementById('detail-civilStatus').textContent = 'Civil Status: ' + civil_status;
    document.getElementById('detail-office').textContent = 'Office/Department: ' + office;
    document.getElementById('detail-position').textContent = 'Position: ' + position;
    document.getElementById('detail-type').textContent = 'Scholarship Type: ' + type_scholarship + '% Scholarship grant';
    document.getElementById('detail-course').textContent = 'Course: ' + course;
    document.getElementById('detail-duration').textContent = 'Duration: ' + start + ' to ' + end;
    document.getElementById('detail-school').textContent = 'College/University: ' + school;
    document.getElementById('detail-schoolAddress').textContent = 'School Address: ' + school_address;

    modal.style.display = 'block'; // Display the modal
    overlay.style.display = 'block';
}

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none'; // Hide the modal
        overlay.style.display = 'none'
        
    }

    closeButton.addEventListener('click', closeModal); // Adds a click event listener to the close button to call the closeModal function when clicked
    applyButton.addEventListener('click', closeModal);

    // Add logic to open the modal when a view button is clicked
    var viewButtons = document.querySelectorAll('.view');
    viewButtons.forEach(function(button) {
        button.addEventListener('click', openModal);
    });


});
