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

        // Function to handle file selection
        function handleFileChange(input) {
            const file = input.files[0];
            const fileNameSpan = document.getElementById(input.id.replace('Input', 'FileName'));
            const removeButtonId = input.id.replace('Input', 'RemoveButton');

            if (file) {
                console.log('Selected file:', file.name);

                fileNameSpan.textContent = file.name;

                const fileURL = URL.createObjectURL(file);
                fileURLs[input.id] = fileURL;
                console.log('File URL created:', fileURL);

                // Add a remove button if not already present
                if (!document.getElementById(removeButtonId)) {
                    const removeButton = document.createElement('button');
                    removeButton.id = removeButtonId;
                    removeButton.textContent = 'Remove';
                    removeButton.classList.add('remove-button');
                    removeButton.type = 'button'; // Ensure the remove button does not submit the form
                    removeButton.onclick = () => removeFile(input.id);
                    fileNameSpan.appendChild(removeButton);
                }
            } else {
                console.log('File input cleared.');
                fileNameSpan.textContent = '';
                delete fileURLs[input.id];
            }

            checkAllFilesSelected(); // Check if all file inputs have files selected
        }

        // Function to handle file removal
        function removeFile(inputId) {
            const input = document.getElementById(inputId);
            const fileNameSpan = document.getElementById(inputId.replace('Input', 'FileName'));

            // Clear the file input
            input.value = '';
            fileNameSpan.textContent = '';
            delete fileURLs[inputId];

            console.log(`File removed for input: ${inputId}`);

            checkAllFilesSelected(); // Check if all file inputs have files selected
        }

        // Function to check if all file inputs have files selected
        function checkAllFilesSelected() {
            const inputs = document.querySelectorAll('.clickable-item input[type="file"]');
            const submitButton = document.getElementById('submitfile');
            let allFilesSelected = true;

            inputs.forEach(input => {
                if (!input.files.length) {
                    allFilesSelected = false;
                }
            });

            submitButton.disabled = !allFilesSelected; // Enable or disable the submit button based on file selection
        }

        // Initial check to set the state of the submit button on page load
        document.addEventListener('DOMContentLoaded', checkAllFilesSelected);