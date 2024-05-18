document.addEventListener('DOMContentLoaded', function () {
    var modal = document.querySelector('.popup-modal');
    var overlay = document.querySelector('.modal-overlay');
    var closeButton = document.getElementById('close');
    var modal1 = document.querySelector('.popup-modal1');
    var applyButton = document.getElementById('apply');
    var trainingForm = document.querySelector('.add-form');
    var addButton = document.getElementById('add-training');
    var cancelButton = document.getElementById('cancel');
    var editButtons = document.querySelectorAll('.edit');
    var newTrainingButton = document.getElementById('add');
    var viewButtons = document.querySelectorAll('.view');

    function openModal(event) {
        var button = event.target;
        var row = button.closest('tr');
        var title = row.getAttribute('data-title');
        var location = row.getAttribute('data-location');
        var startDate = row.getAttribute('data-start_date');
        var endDate = row.getAttribute('data-end_date');
        var startTime = row.getAttribute('data-start_time');
        var endTime = row.getAttribute('data-end_time');
        var description = row.getAttribute('data-description');
        var participants = row.getAttribute('data-participants');

        document.getElementById('training-title').textContent = title;
        document.querySelector('.location').textContent = 'Location: ' + location;
        document.querySelector('.date').textContent = 'Date: ' + startDate + ' to ' + endDate;
        document.querySelector('.time').textContent = 'Time: ' + startTime + ' to ' + endTime;
        document.querySelector('.description').textContent = description;
        document.querySelector('.participants').textContent = 'Participants: ' + participants;
        modal.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    }
  
    
    function editModal(event) {
        var button = event.target;
        var row = button.closest('tr');
        var id = row.getAttribute('data-id');
        var title = row.getAttribute('data-title');
        var type = row.getAttribute('data-type');
        var location = row.getAttribute('data-location');
        var startDate = row.getAttribute('data-start_date');
        var endDate = row.getAttribute('data-end_date');
        var startTime = row.getAttribute('data-start_time');
        var endTime = row.getAttribute('data-end_time');
        var description = row.getAttribute('data-description');
        var participants = row.getAttribute('data-participants');
        var pre_test = row.getAttribute('data-pre_test');
        var post_test = row.getAttribute('data-post_test');
        
        // Update modal inputs with retrieved values
        var idVal = document.getElementById('id_value');
        var titleInputEdit = document.getElementById('title-edit');
        var typeInputEdit = document.getElementById('type-edit');
        var locationEdit = document.getElementById('location-edit');
        var startDateEdit = document.getElementById('start-date-edit');
        var endDateEdit = document.getElementById('end-date-edit');
        var startTimeEdit = document.getElementById('start-time-edit');
        var endTimeEdit = document.getElementById('end-time-edit');
        var descriptionEdit = document.getElementById('description-edit');
        var participantsEdit = document.getElementById('participants-edit');
        var preTestEdit = document.getElementById('pre_test-edit');
        var postTestEdit = document.getElementById('post_test-edit');

            idVal.value = id;
            titleInputEdit.value = title;
            typeInputEdit.value = type;
            locationEdit.value = location;
            startDateEdit.value = startDate;
            endDateEdit.value = endDate;
            startTimeEdit.value = startTime;
            endTimeEdit.value = endTime;
            descriptionEdit.value = description;
            participantsEdit.value = participants;
            preTestEdit.value = pre_test;
            postTestEdit.value = post_test

    
            // Show modal
            modal1.style.display = 'block';
            overlay.style.display = 'block';
    }
    
    

    function applyModal() {
        modal.style.display = 'block';
        overlay.style.display = 'block';
        modal1.style.display = 'none';
    }

    function newTraining() {
        trainingForm.style.display = 'block';
        overlay.style.display = 'block';
    }

    function addTraining() {
        trainingForm.style.display = 'none';
        overlay.style.display = 'none';
        // Add function for adding into DB
    }

    function cancelTraining() {
        trainingForm.style.display = 'none';
        overlay.style.display = 'none';
    }

    // Ensure elements exist before adding event listeners
    if (closeButton) closeButton.addEventListener('click', closeModal);
    if (applyButton) applyButton.addEventListener('click', applyModal);
    if (addButton) addButton.addEventListener('click', addTraining);
    if (cancelButton) cancelButton.addEventListener('click', cancelTraining);
    if (newTrainingButton) newTrainingButton.addEventListener('click', newTraining);

    viewButtons.forEach(button => {
        button.addEventListener('click', openModal);
    });
    editButtons.forEach(button => {
        button.addEventListener('click', editModal);
    });

    // Event delegation for dynamically added buttons
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('edit')) {
            editModal(event);
        }
    });
});
