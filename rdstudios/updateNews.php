<?php 
$news_id = $_REQUEST['news_id'];
$a = $_REQUEST['txtName'];
$b = $_REQUEST['txtAreaNewsDes'];
$c=$_REQUEST['dtPub'];

require_once("dbconnect.php");
$sql = "INSERT INTO `news_info`(`news_name`, `news_description`, `news_publication_date`, `news_registration_date`)
 VALUES ('$a','$b','$c',now())";
 $sql="UPDATE `news_info` SET `news_name`='$a',`news_description`='$b',
 `news_publication_date`='$c' WHERE news_id='$news_id'";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:newsList.php?resmsg=1");
?>