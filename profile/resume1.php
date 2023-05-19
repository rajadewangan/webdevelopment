<?php
// nextpage.php

session_start();
$picturePath = $_SESSION["picturePath"];

// Display the image
echo "<img src='$picturePath' alt='User Picture'>";
?>
