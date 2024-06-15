// document.addEventListener('DOMContentLoaded', function () {
//     var modal = document.querySelector('.view-file'); // Selects the modal element
//     var closeButton = document.getElementById('close'); // Selects the close button within the modal

//     // Function to open the modal
//     function openModal() {
//         modal.style.display = 'block'; // Sets the display style of the modal to block to make it visible
//     }

//     // Function to close the modal
//     function closeModal() {
//         modal.style.display = 'none'; // Sets the display style of the modal to none to hide it
//     }

//     closeButton.addEventListener('click', closeModal); // Adds a click event listener to the close button to call the closeModal function when clicked

//     // Add logic to open the modal when an announcement is clicked
//     var announcements = document.querySelectorAll('.view'); // Selects all announcement elements
//     announcements.forEach(function(announcement) {
//         announcement.addEventListener('click', openModal);
//     });
// });

/*document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view');
    viewButtons.forEach(button => {
        button.addEventListener('click', function () {
            const fileUrl = button.getAttribute('data-file-url');
            window.open(fileUrl, '_blank');
        });
    });
});
*/