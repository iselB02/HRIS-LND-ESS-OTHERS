document.addEventListener('DOMContentLoaded', function () {
    var scholarship = document.getElementById('scholarship-form-container');
    var cancel = document.getElementById('cancel');
    var submit = document.getElementById('submit');
    var overlay  = document.querySelector('.modal-overlay');

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
});
