// public/js/my_profile.js

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('editProfileModal');
    const closeModalBtn = document.querySelector('.close');
    const cancelBtn = document.querySelector('.cancel_btn');
    const openModalBtn = document.querySelector('.edit_info');
    const formAddModal = document.getElementById('form_add');
    const openFormAddButton = document.getElementById('add_training');
    const saveBtn = document.querySelector('.save_btn');


    function openModal() {
        modal.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
        formAddModal.style.display = 'none';
    }

    openModalBtn.addEventListener('click', openModal);
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    saveBtn.addEventListener('click', closeModal);

    function openFormAddModal() {
        formAddModal.style.display = 'block';
    }


    openFormAddButton.addEventListener('click', openFormAddModal);


    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            closeModal();
            
        }
    });

    window.addEventListener('click', (event) => {
        if (event.target === formAddModal) {
            closeFormAddModal();
        }
    });
});
    