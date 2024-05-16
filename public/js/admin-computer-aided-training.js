// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var overlay = document.getElementsByClassName("modal-overlay")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  overlay.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  overlay.style.display = "none";
}

// Function to handle form submission
function submitForm() {
  // Add form submission logic here
  alert('Form submitted!');
  modal.style.display = "none";
}

// Function to close the modal without submitting
function closeModal() {
  modal.style.display = "none";
}

// Function to display image after selection
function displayImage(input) {
  var file = input.files[0];
  var reader = new FileReader();
  reader.onload = function(e) {
    var displayedImage = document.getElementById('displayedImage');
    displayedImage.src = e.target.result;
    displayedImage.style.display = 'block';
  }
  reader.readAsDataURL(file);
}

function removeImage() {
  var displayedImage = document.getElementById('displayedImage');
  var imageUpload = document.getElementById('imageUpload');
  displayedImage.src = '';
  displayedImage.style.display = 'none';
  imageUpload.value = '';
}