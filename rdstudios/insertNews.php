<?php 
$a = $_REQUEST['txtName'];
$b = $_REQUEST['txtAreaNewsDes'];
$c=$_REQUEST['dtPub'];

require_once("dbconnect.php");
$sql = "INSERT INTO `news_info`(`news_name`, `news_description`, `news_publication_date`, `news_registration_date`)
 VALUES ('$a','$b','$c',now())";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:newsForm.php?resmsg=1");
?>