<?php 
@session_satart();
$a = $_REQUEST['txtSubject'];
$b = $_REQUEST['txtDescription'];
$usr=$_SESSION['uname'];
require_once("dbconnect.php");
$sql = "INSERT INTO `complain_info`(`user_name`, `complain_subject`, `complain_descriptin`, `complain_date`) 
VALUES ('$user','$a','$b',time())";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:complainForm.php?resmsg=1");
?>