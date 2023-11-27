<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload"])) {
    // Check if the file was uploaded without errors
    if (isset($_FILES["document"]) && $_FILES["document"]["error"] == UPLOAD_ERR_OK) {
        // Define the target directory to store the uploaded documents
        $targetDirectory = "uploads/";

        // Create the target directory if it doesn't exist
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        // Get the original name of the uploaded file
        $originalFileName = basename($_FILES["document"]["name"]);

        // Generate a unique name for the file to avoid overwriting
        $uniqueFileName = time() . '_' . $originalFileName;

        // Set the target path for the uploaded file
        $targetPath = $targetDirectory . $uniqueFileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $targetPath)) {
            echo "File uploaded successfully!";
            // You can store the file path in a database or perform additional actions here
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Error: " . $_FILES["document"]["error"];
    }
}
?>