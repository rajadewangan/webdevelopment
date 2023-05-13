<?php 
  $x=$_REQUEST["did"];
  require_once("dbconnect.php");
  mysqli_query($con,"delete from course where cid='$x'");

  header("location:displayCourse.php?resmsg=1");

?>