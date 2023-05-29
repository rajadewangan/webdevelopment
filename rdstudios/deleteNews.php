<?php 
$news_id = $_REQUEST['news_id'];


require_once("dbconnect.php");

 $sql="DELETE FROM `news_info` WHERE news_id='$news_id'";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:newsList.php?resmsg=1");
?>