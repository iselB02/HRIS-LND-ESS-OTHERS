document.addEventListener('DOMContentLoaded', function() {
    var viewButtons = document.querySelectorAll('.view');
    var closeButton = document.querySelector('.close');
    var info = document.querySelector('.seminar_view');
    var table = document.querySelector('.admin-serminar-training-container');
    var preTestButton = document.getElementById('pre-test-btn');
    var postTestButton = document.getElementById('post-test-btn');
    var row; // Define row outside the openInfo function

    function openInfo(event) {
        var button = event.target;
        row = button.closest('tr'); // Update the value of row

        var title = row.getAttribute('data-title');
        var location = row.getAttribute('data-location');
        var startDate = row.getAttribute('data-start-date');
        var endDate = row.getAttribute('data-end-date');

        document.getElementById('detail-location').textContent = 'Location: ' + location;
        document.getElementById('detail-topic').textContent = 'Topic: ' + title;
        document.getElementById('detail-date').textContent = 'Date: ' + startDate + ' - ' + endDate;

        if (table && info) {
            table.style.display = 'none';
            info.style.display = 'block';
        } else {
            console.error('Table or info element not found');
        }
    }
    function openPreTestInfo() {
        var pre_test = row.getAttribute('data-pre-link');

        window.open(pre_test, '_blank');
    }
    
    function openPostTestInfo() {
        var post_test = row.getAttribute('data-post-link');

        window.open(post_test, '_blank');
    }
    

    viewButtons.forEach(button => {
        button.addEventListener('click', openInfo);
    });

    preTestButton.addEventListener('click', openPreTestInfo);
    postTestButton.addEventListener('click', openPostTestInfo);

    function closeInfo() {
        if (table && info) {
            table.style.display = 'block';
            info.style.display = 'none';
        } else {
            console.error('Table or info element not found');
        }
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeInfo);
    } else {
        console.error('Close button not found');
    }
});
