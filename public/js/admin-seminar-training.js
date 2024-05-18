document.addEventListener('DOMContentLoaded', function () {
    // Select modal elements
    var modal = document.querySelector('.popup-modal');
    var overlay = document.querySelector('.modal-overlay');
    var overlay1 = document.querySelector('.modal1-overlay');
    var closeButton = document.getElementById('close');
    var modal1 = document.querySelector('.popup-modal1');
    var applyButton = document.getElementById('apply');
    var trainingForm = document.querySelector('.add-form');
    var addButton = document.getElementById('add-training');
    var cancelButton = document.getElementById('cancel');
    var newTrainingButton = document.getElementById('add');
    var viewButtons = document.querySelectorAll('.view');
    var editButtons = document.querySelectorAll('.edit');

    // Function to open a modal and populate it with data
    function openModal(title, location, startDate, endDate, startTime, endTime, description, participants) {
        document.getElementById('training-title').textContent = title;
        document.querySelector('.location').textContent = 'Location: ' + location;
        document.querySelector('.date').textContent = 'Date: ' + startDate + ' to ' + endDate;
        document.querySelector('.time').textContent = 'Time: ' + startTime + ' to ' + endTime;
        document.querySelector('.description').textContent = description;
        document.querySelector('.participants').textContent = 'Participants: ' + participants;

        modal.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    }

    // Function to open edit modal
    function editModal() {
        modal1.style.display = 'block';
        overlay1.style.display = 'block';
    }

    // Function to apply changes from edit modal
    function applyModal() {
        // Implement logic to update training details
        // For now, let's just close the modal
        modal.style.display = 'block';
        overlay.style.display = 'block';
        modal1.style.display = 'none';
    }

    // Function to show the new training form
    function newTraining() {
        trainingForm.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Function to hide the new training form and overlay
    function addTraining() {
        trainingForm.style.display = 'none';
        overlay.style.display = 'none';
        overlay1.style.display = 'none';
        modal1.style.display = 'none';
        // Add functionality for adding to the database here
    }

    // Function to cancel adding new training and hide the form
    function cancelTraining() {
        trainingForm.style.display = 'none';
        overlay1.style.display = 'none';
        overlay.style.display = 'none';
        modal1.style.display = 'none';
    }

    // Attach event listeners
    if (closeButton) closeButton.addEventListener('click', closeModal);
    if (applyButton) applyButton.addEventListener('click', applyModal);
    if (addButton) addButton.addEventListener('click', addTraining);
    if (cancelButton) cancelButton.addEventListener('click', cancelTraining);
    if (newTrainingButton) newTrainingButton.addEventListener('click', newTraining);

    // Attach event listeners to view buttons
    viewButtons.forEach(button => {
        button.addEventListener('click', function () {
            var row = button.closest('tr');
            var title = row.getAttribute('data-title');
            var location = row.getAttribute('data-location');
            var startDate = row.getAttribute('data-start_date');
            var endDate = row.getAttribute('data-end_date');
            var startTime = row.getAttribute('data-start_time');
            var endTime = row.getAttribute('data-end_time');
            var description = row.getAttribute('data-description');
            var participants = row.getAttribute('data-participants');
            openModal(title, location, startDate, endDate, startTime, endTime, description, participants);
        });
    });

    // Attach event listeners to edit buttons
    editButtons.forEach(button => {
        button.addEventListener('click', editModal);
    });


});
