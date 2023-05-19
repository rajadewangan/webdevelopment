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
$rsUser = mysqli_query($con, "SELECT * FROM user_info WHERE user_name = '$d'") or die("Query error -1");

if (mysqli_num_rows($rsUser) == 0) {
    // Insert the new user into the database
    $query = "INSERT INTO `user_info`(`cust_name`, `cust_email`, `cust_mobile`, `user_name`, `user_pass`, `user_type`, `reg_date`) 
    VALUES ('$a', '$b', '$c', '$d', '$e', 'user', NOW())";

    mysqli_query($con, $query) or die("Query error -2");
    header("location:customerForm.php?rsmsg=1");
} else {
    header("location:customerForm.php?rsmsg=2");
}
?>
