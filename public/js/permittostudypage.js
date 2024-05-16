let fileURLs = {}; // Object to store file URLs

// Function to handle clicking on a clickable item to open the file input dialog or view the uploaded file
function handleClick(element) {
    const inputId = element.getAttribute('data-file-input');
    const input = document.getElementById(inputId);

    if (fileURLs[inputId]) {
        window.open(fileURLs[inputId], '_blank'); // Open the uploaded file in a new tab
    } else {
        if (input) {
            input.click(); // Open the file dialog if no file is selected
        } else {
            console.error(`Element with ID ${inputId} not found.`);
        }
    }
}

// Function to handle file selection and update the corresponding checkbox status
function handleFileChange(input) {
    const file = input.files[0];
    const itemId = input.id.replace('Input', '');
    const button = document.getElementById(itemId + 'Checkbox');
    const fileNameSpan = document.getElementById(input.id.replace('Input', 'FileName'));

    if (file) {
        console.log('Selected file:', file.name);
        button.classList.add("file-uploaded");
        button.classList.remove("wrong-document", "send-again", "in-process", "check");

        fileNameSpan.textContent = file.name; // Display the selected file name

        // Create a temporary URL for the selected file
        const fileURL = URL.createObjectURL(file);
        fileURLs[input.id] = fileURL;
    } else {
        button.classList.remove("file-uploaded");
        fileNameSpan.textContent = ''; // Clear the file name display
        delete fileURLs[input.id]; // Remove the file URL from the object
    }
}

// Function to change the status of a checkbox button through various states
function changeStatus(button) {
    if (!button.classList.contains("disabled")) {
        if (button.classList.contains("in-process")) {
            button.classList.remove("in-process");
            button.classList.add("send-again");
        } else if (button.classList.contains("send-again")) {
            button.classList.remove("send-again");
            button.classList.add("wrong-document");
        } else if (button.classList.contains("wrong-document")) {
            button.classList.remove("wrong-document");
            button.classList.add("check");
        } else if (button.classList.contains("check")) {
            button.classList.remove("check");
            button.classList.add("in-process");
        } else {
            button.classList.add("in-process");
        }
    }
}
