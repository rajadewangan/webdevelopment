<?php 
@session_start();
$receiver=$_REQUEST['txtTo'];
$a = $_REQUEST['txtSubject'];
$b = $_REQUEST['txtDescription'];
$usr=$_SESSION['uname'];
require_once("dbconnect.php");
$sql = "INSERT INTO `complain_info`(`user_name`, `complain_subject`, `complain_descriptin`, `complain_date`,`receiver_name`) 
VALUES ('$usr','$a','$b',now(),'$receiver')";
 mysqli_query($con,$sql) or die("Query Error - 1");
 if($receiver=='admin')
 {
 header("location:complainForm.php?resmsg=1");
}
else{
    header("location:complainList.php?resmsg=1");
}
?>