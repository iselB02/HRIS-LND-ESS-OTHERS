document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('editProfileModal');
    var closeButton = modal.querySelector('.close');
    var cancelButton = modal.querySelector('.cancel_btn');
    var editInfoButton = document.querySelector('.edit_info');

    // Function to open the modal
    function openModal() {
        modal.style.display = 'flex';
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none';
    }

    // Event listeners for opening and closing the modal
    editInfoButton.addEventListener('click', openModal);
    closeButton.addEventListener('click', closeModal);
    cancelButton.addEventListener('click', closeModal);
});
