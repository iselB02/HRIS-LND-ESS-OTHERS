document.addEventListener('DOMContentLoaded', function () {
    // Function to open the modal for a specific record
    function showFiles(recordId) {
        var modal = document.getElementById('view-file-' + recordId);
        console.log('Opening modal for record:', recordId); // Debugging log
        modal.style.display = 'block';
    }

    // Function to close the modal for a specific record
    function hideFiles(recordId) {
        var modal = document.getElementById('view-file-' + recordId);
        console.log('Closing modal for record:', recordId); // Debugging log
        modal.style.display = 'none';
    }

    // Add logic to open the modal when a view button is clicked
    var viewButtons = document.querySelectorAll('.view');
    viewButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var recordId = button.closest('tr').dataset.recordId; // Assuming the tr element has a data-record-id attribute
            console.log('View button clicked for record:', recordId); // Debugging log
            showFiles(recordId);
        });
    });

    // Add logic to close the modal when the close button is clicked
    var closeButtons = document.querySelectorAll('.close-btn');
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var recordId = button.closest('.view-file').id.replace('view-file-', '');
            console.log('Close button clicked for record:', recordId); // Debugging log
            hideFiles(recordId);
        });
    });

    // Add logic to view the file in a new window when a view-file button is clicked
    var viewFileButtons = document.querySelectorAll('.view-file-btn');
    viewFileButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var fileUrl = button.getAttribute('data-file-url');
            console.log('Opening file URL:', fileUrl); // Debugging log

            // Ensure the file URL is correct and accessible
            if (fileUrl) {
                window.open(fileUrl, '_blank');
            } else {
                console.error('File URL is missing or incorrect');
            }
        });
    });
});
