document.addEventListener('DOMContentLoaded', function() {
    var addRowCoreButton = document.getElementById('addRowCore');
    var addRowSupButton = document.getElementById('addRowSup');
    var addIPCR = document.getElementById('new_ipcr');
    var formIPCR = document.getElementById('ipcr_view');
    var close = document.getElementById('cancel');

    if (addRowCoreButton) {
        addRowCoreButton.addEventListener('click', addRow);
    }
    if (addRowSupButton) {
        addRowSupButton.addEventListener('click', addRowSup);
    }

    function openForm() {
        formIPCR.style.display = "block";
    }

    function closeForm() {
        formIPCR.style.display = "none";
    }

    if (addIPCR) {
        addIPCR.addEventListener('click', openForm);
    }

    if (close)  {
        close.addEventListener('click', closeForm);
    }

    // Attach event listener for row deletion to the table body
    var coreTableBody = document.querySelector("#core_funct");
    var supTableBody = document.querySelector("#sup_func");

    coreTableBody.addEventListener('click', deleteRow);
    supTableBody.addEventListener('click', deleteRow);
});

function addRow() {
    // Get the table body
    var tableBody = document.querySelector("#core_funct");

    // Insert a new row at the end of the table
    var newRow = tableBody.insertRow();

    // Add class to the new row
    newRow.className = "row-style"; // Adjust the class name as per your existing styles

    // Insert cells and input elements for the new row
    newRow.innerHTML = `
        <td><input type="text" name="output" class="output"></td>
        <td><input type="text" name="success_indicators" class="success_indicators"></td>
        <td><input type="text" name="actual_accomplishments" class="actual_accomplishments"></td>
        <td><input type="text" name="rating_q" class="rating-input"></td>
        <td><input type="text" name="rating_e" class="rating-input"></td>
        <td><input type="text" name="rating_t" class="rating-input"></td>
        <td><input type="text" name="rating_a" class="rating-input"></td>
        <td><button type="button" class="deleteRowButton" style="color: red;">X</button></td>
    `;

    // Apply styling to the input elements
    var ratingInputs = newRow.querySelectorAll(".rating-input");
    ratingInputs.forEach(function(input) {
        input.style.width = "45px";
    });

    // Remove border of the delete button
    var deleteButtonCell = newRow.querySelector("td:last-child");
    deleteButtonCell.style.border = "none";
}

function addRowSup() {
    // Get the table body
    var tableBody = document.querySelector("#sup_func");

    // Insert a new row at the end of the table
    var newRow = tableBody.insertRow();

    // Add class to the new row
    newRow.className = "row-style"; // Adjust the class name as per your existing styles

    // Insert cells and input elements for the new row
    newRow.innerHTML = `
        <td><input type="text" name="sup_output" class="sup_output"></td>
        <td><input type="text" name="sup_sucInd" class="sup_success_sucInd"></td>
        <td><input type="text" name="sup_actAccomp" class="sup_actAccomp"></td>
        <td><input type="text" name="sup_rating_q" class="rating-input"></td>
        <td><input type="text" name="sup_rating_e" class="rating-input"></td>
        <td><input type="text" name="sup_rating_t" class="rating-input"></td>
        <td><input type="text" name="sup_rating_a" class="rating-input"></td>
        <td><button type="button" class="deleteRowButton" style="color: red;">X</button></td>
    `;

    // Apply styling to the input elements
    var ratingInputs = newRow.querySelectorAll(".rating-input");
    ratingInputs.forEach(function(input) {
        input.style.width = "45px";
    });

    // Remove border of the delete button
    var deleteButtonCell = newRow.querySelector("td:last-child");
    deleteButtonCell.style.border = "none";
}

function deleteRow(event) {
    var target = event.target;
    if (target.classList.contains('deleteRowButton')) {
        // Prompt the user for confirmation
        var confirmation = confirm("Are you sure you want to delete this row?");
        if (confirmation) {
            // If user confirms, proceed with deletion
            var row = target.closest('tr');
            row.parentNode.removeChild(row);
        }
    }
}
