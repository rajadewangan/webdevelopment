<?php 
@session_start();
$complain_id=$_REQUEST['complain_id'];
$b = $_REQUEST['txtDescription'];
require_once("dbconnect.php");
$sql = "UPDATE `complain_info` SET `reply_description`='$b' WHERE `complain_id`='$complain_id'";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:complainList.php?resmsg=1");
?>