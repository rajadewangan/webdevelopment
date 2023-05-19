<?php
  $con =mysqli_connect("127.0.0.1","root","") or die("database connection errror");
 mysqli_select_db($con,"rdstudios") or die("database selection error");
?>