<?php
@session_start();

// Get the form input values
$a = $_REQUEST['txtName'];
$b = $_REQUEST['txtEmail'];
$c = $_REQUEST['txtMobile'];
$d = $_REQUEST['txtUser'];
$e = $_REQUEST['txtPassword'];

require_once("dbconnect.php");

// Check if the user already exists

    // Insert the new user into the database
    $query = "UPDATE `user_info` SET `cust_name`='$a',`cust_email`='$b',
    `cust_mobile`='$c',`user_name`='$d',`user_pass`='$e' WHERE `user_name`='$d'";

    mysqli_query($con, $query) or die("Query error -2");
    header("location:editProfile.php?rsmsg=1");

?>
