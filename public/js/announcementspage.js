document.addEventListener('DOMContentLoaded', function () {
    var modal = document.querySelector('.popup-modal');
    var overlay  = document.querySelector('.modal-overlay');
    var closeButton = document.getElementById('close');

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
