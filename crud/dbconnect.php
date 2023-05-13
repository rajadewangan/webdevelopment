<?php
$con = mysqli_connect('localhost','root','') or die('Database connection error !');
mysqli_select_db($con,'course') or die("Database selection error !");

?>