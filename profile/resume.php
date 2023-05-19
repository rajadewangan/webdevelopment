<?php
// display.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Check if file was uploaded without errors
  if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
    $tempName = $_FILES["picture"]["tmp_name"];
    $fileName = $_FILES["picture"]["name"];
    
    // Specify the directory to save the uploaded file
    $uploadDir = "./";
    
    // Move the uploaded file to the desired location
    if (move_uploaded_file($tempName, $uploadDir . $fileName)) {
      // Display a success message
      echo "File uploaded successfully!";
      
      // Store the file path in a session variable
      session_start();
      $_SESSION["picturePath"] = $uploadDir . $fileName;
      
      // Redirect to the next page to display the image
      header("Location: resume1.php");
      exit;
    } else {
      echo "Error uploading file.";
    }
  } else {
    echo "Error: No file uploaded.";
  }
}
?>
