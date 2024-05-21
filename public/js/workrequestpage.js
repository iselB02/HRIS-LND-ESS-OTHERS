document.addEventListener("DOMContentLoaded", function () {
    // Get modal forms and overlay
    var overtimeForm = document.getElementById("overtime-form");
    var officialBusinessForm = document.getElementById("officialBusiness-form");
    var travelOrderForm = document.getElementById("travelOrder-form");
    var overlay = document.querySelector(".modal-overlay");

    // Function to open specific form
    function openForm(form) {
        form.style.display = "block";
        overlay.style.display = "block";
    }

    // Function to close all forms and overlay
    function closeForms() {
        [overtimeForm, officialBusinessForm, travelOrderForm].forEach(function (form) {
            form.style.display = "none";
        });
        overlay.style.display = "none";
    }

    // Event listeners for opening forms
    document.getElementById("overTime").addEventListener("click", function () {
        openForm(overtimeForm);
    });
    document.getElementById("officialBusiness").addEventListener("click", function () {
        openForm(officialBusinessForm);
    });
    document.getElementById("travelOrder").addEventListener("click", function () {
        openForm(travelOrderForm);
    });

    // Event listeners for cancel buttons
    document.querySelectorAll('.submit button[id^="cancel"]').forEach(function (cancelButton) {
        cancelButton.addEventListener("click", closeForms);
    });
});
