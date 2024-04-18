document.addEventListener('DOMContentLoaded', function () {
    var modal = document.querySelector('.popup-modal');
    var overlay  = document.querySelector('.modal-overlay');
    var closeButton = document.getElementById('close');
    var modal1 = document.querySelector('.popup-modal1');
    var applyButton = document.getElementById('apply');
    var trainingForm = document.querySelector('.add-form');
    var addButton = document.getElementById('add-training');
    var cancelButton = document.getElementById('cancel');

    function openModal() {
        modal.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    }

    function editModal() {
        modal1.style.display = 'block';
        overlay.style.display = 'block';
        modal.style.display = 'none';
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
        //add function for adding into db
    }

    function cancelTraining() {
        trainingForm.style.display = 'none';
        overlay.style.display = 'none';
    }


    closeButton.addEventListener('click', closeModal);
    applyButton.addEventListener('click', applyModal);
    addButton.addEventListener('click', addTraining);
    cancelButton.addEventListener('click', cancelTraining);

    // Add logic to open the modal when an announcement is clicked
    var announcementHeader = document.getElementById('view');
    announcementHeader.addEventListener('click', openModal);
    var announcementHeader1 = document.getElementById('edit');
    announcementHeader1.addEventListener('click', editModal);
    var announcementHeader1 = document.getElementById('add');
    announcementHeader1.addEventListener('click', newTraining);
});
