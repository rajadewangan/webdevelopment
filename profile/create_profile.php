<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's information from the form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    // Get the uploaded photo
    $photo = $_FILES['photo'];

    // Check for errors in the photo upload
    if ($photo['error'] === UPLOAD_ERR_OK) {
        $tmpFilePath = $photo['tmp_name'];

        // Generate a unique name for the photo
        $photoName = uniqid() . '_' . $photo['name'];
        $uploadPath = 'uploads/' . $photoName;

        // Move the uploaded photo to the desired location
        move_uploaded_file($tmpFilePath, $uploadPath);
    }

    // Create the user's profile
    $profile = [
        'name' => $name,
        'address' => $address,
        'phone' => $phone,
        'dob' => $dob,
        'photo' => $uploadPath
    ];

    // Redirect the user to their profile page
    header('Location: profile.php?name=' . urlencode($name));
    exit();
}
?>