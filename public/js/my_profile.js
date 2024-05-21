// public/js/my_profile.js

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('editProfileModal');
    const closeModalBtn = document.querySelector('.close');
    const cancelBtn = document.querySelector('.cancel_btn');
    const openModalBtn = document.querySelector('.edit_info');

    function openModal() {
        modal.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
    }

    openModalBtn.addEventListener('click', openModal);
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);

    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            closeModal();
        }
    });
});
    