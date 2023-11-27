<?php
// Example PHP script with an intentional error
$undefinedVariable = $nonExistentArray['key'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Error Handling</title>
    <!-- Add your stylesheets and other dependencies here -->
</head>
<body>

<!-- Your HTML content -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // This function fetches PHP errors from the server and displays them
    function checkForErrors() {
        fetch('example.php')
            .then(response => response.text())
            .then(data => {
                // Check if the response contains an error message
                if (data.includes('Notice') || data.includes('Warning') || data.includes('Fatal error')) {
                    // Display the error message in a pop-up or notification
                    alert('PHP Error: ' + data);
                }
            })
            .catch(error => console.error('Error checking for PHP errors:', error));
    }

    // Call the function to check for errors when the page loads
    checkForErrors();
});
</script>

</body>
</html>
