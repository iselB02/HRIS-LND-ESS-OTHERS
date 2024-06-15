document.addEventListener('DOMContentLoaded', function() {
    //    var addRowCoreButton = document.getElementById('addRowCore');
      //  var addRowSupButton = document.getElementById('addRowSup');
        var addOPCR = document.getElementById('new_opcr');
          var opcrview = document.getElementById('main-view');
        var submit = document.getElementById('submit');
        var formOPCR = document.getElementById('opcr_view');
        var close = document.getElementById('cancel');
        var coreCount = 1;
        var supCount = 1
    
        // if (addRowCoreButton) {
        //     addRowCoreButton.addEventListener('click', function() {
        //         addRow(coreCount);
        //     });
        // }
    
        // if (addRowSupButton) {
        //     addRowSupButton.addEventListener('click', function() {
        //         addRowSup(supCount);
        //     });
        // }
    
        function openForm() {
            formOPCR.style.display = "block";
              opcrview.style.display = "none";
        }
    
        function closeForm() {
            formOPCR.style.display = "none";
              opcrview.style.display = "block";
        }
    
        if (addOPCR) {
            addOPCR.addEventListener('click', openForm);
        }
    
        if (close)  {
            close.addEventListener('click', closeForm);
        }
        if (submit)  {
            submit.addEventListener('click', closeForm);
        }
    
    //     // Attach event listener for row deletion to the table body
    //     var coreTableBody = document.querySelector("#core_funct");
    //     var supTableBody = document.querySelector("#sup_func");
    
    //     coreTableBody.addEventListener('click', deleteRow);
    //     supTableBody.addEventListener('click', deleteRow);
    });
    
    // function addRow(coreCount) {
    //     // Get the table body
    //     var tableBody = document.querySelector("#core_funct");
    
    //     coreCount++;
    
    //     // Insert a new row at the end of the table
    //     var newRow = tableBody.insertRow();
    
    //     // Add class to the new row
    //     newRow.className = "row-style"; // Adjust the class name as per your existing styles
    
    //     // Insert cells and input elements for the new row
    //     newRow.innerHTML = `
    //         <td>${coreCount}  <button type="button" class="deleteRowButton" style="color: red;">X</button></td>
    //         <td><input type="text" name="output" class="output"></td>
    //         <td><input type="text" name="success_indicators" class="success_indicators"></td>
    //         <td><input type="text" name="actual_accomplishments" class="actual_accomplishments"></td>
    //         <td>
    //         <select name="q" id="rating_q">
    //             <option selected>Pick</option>
    //             <option value="5">5</option>
    //             <option value="4">4</option>
    //             <option value="3">3</option>
    //             <option value="2">2</option>
    //             <option value="1">1</option>
    //         </select>
    //         </td>
    //         </td>
    //         <td>
    //             <select name="e" id="rating_e">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //         <td>
    //             <select name="t" id="rating_t">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //         <td>
    //             <select name="a" id="rating_a">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //     `;
    
    //     // Apply styling to the input elements
    //     var ratingInputs = newRow.querySelectorAll(".rating-input");
    //     ratingInputs.forEach(function(input) {
    //         input.style.width = "45px";
    //     });
    
    // }
    
    // function addRowSup(supCount) {
    //     // Get the table body
    //     var tableBody = document.querySelector("#sup_func");
    
    //     supCount++;
    //     // Insert a new row at the end of the table
    //     var newRow = tableBody.insertRow();
    
    //     // Add class to the new row
    //     newRow.className = "row-style"; // Adjust the class name as per your existing styles
    
    //     // Insert cells and input elements for the new row
    //     newRow.innerHTML = `
    //         <td>${supCount}  <button type="button" class="deleteRowButton" style="color: red;">X</button></td>
    //         <td><input type="text" name="sup_output" class="sup_output"></td>
    //         <td><input type="text" name="sup_sucInd" class="sup_success_sucInd"></td>
    //         <td><input type="text" name="sup_actAccomp" class="sup_actAccomp"></td>
    //         <td>
    //             <select name="q" id="sup_rating_q">
    //             <option selected>Pick</option>
    //             <option value="5">5</option>
    //             <option value="4">4</option>
    //             <option value="3">3</option>
    //             <option value="2">2</option>
    //             <option value="1">1</option>
    //         </select>
    //         </td>
    //         <td>
    //             <select name="e" id="sup_rating_e">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //         <td>
    //             <select name="t" id="sup_rating_t">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //         <td>
    //             <select name="a" id="sup_rating_a">
    //                 <option selected>Pick</option>
    //                 <option value="5">5</option>
    //                 <option value="4">4</option>
    //                 <option value="3">3</option>
    //                 <option value="2">2</option>
    //                 <option value="1">1</option>
    //             </select>
    //         </td>
    //     `;
    
    //     // Apply styling to the input elements
    //     var ratingInputs = newRow.querySelectorAll(".rating-input");
    //     ratingInputs.forEach(function(input) {
    //         input.style.width = "45px";
    //     });  
    // }
    
    // function deleteRow(event) {
    //     var target = event.target;
    //     if (target.classList.contains('deleteRowButton')) {
    //         // Prompt the user for confirmation
    //         var confirmation = confirm("Are you sure you want to delete this row?");
    //         if (confirmation) {
    //             // If user confirms, proceed with deletion
    //             var row = target.closest('tr');
    //             row.parentNode.removeChild(row);
    //         }
    //     }
    // }