document.addEventListener('DOMContentLoaded', function () {
    var announcements = document.querySelectorAll('.announcement');
    var modal = document.querySelector('.popup-modal');
    var overlay  = document.querySelector('.modal-overlay');
    var closeButton = document.getElementById('close');
    var  modalTitle = document.getElementById('modal-title');
    var  modalDate = document.getElementById('modal-date');
    var  modalTime = document.getElementById('modal-time');
    var  modalDescription = document.getElementById('modal-description');

    announcements.forEach(announcement => {
        announcement.addEventListener('click', () => {
            const title = announcement.getAttribute('data-title');
            const startDate = announcement.getAttribute('data-start_date');
            const endDate = announcement.getAttribute('data-end_date');
            const startTime = announcement.getAttribute('data-start_time');
            const endTime = announcement.getAttribute('data-end_time');
            const description = announcement.getAttribute('data-description');

            modalTitle.textContent = title;
            modalDate.textContent = `${startDate} to ${endDate} ||`;
            modalTime.textContent = `${startTime} to ${endTime}`;
            modalDescription.textContent = description;

            modalOverlay.classList.add('visible');
            popupModal.classList.add('visible');
        });
    });

    function openModal() {
        modal.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    }

    closeButton.addEventListener('click', closeModal);

      // Add logic to open the modal when an announcement is clicked
      var announcements = document.querySelectorAll('.announcement'); // Selects all announcement elements
      announcements.forEach(function(announcement) {
          announcement.addEventListener('click', openModal);
      });
});
