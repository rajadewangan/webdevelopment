<?php
$a = $_REQUEST['txtCourseName'];
$b = $_REQUEST['txtTeacherName'];
$c = $_REQUEST['txtFees'];
$d = $_REQUEST['txtRegFees'];
require_once('dbconnect.php');
mysqli_query($con,"insert into course(cname,tname,fees,regfees) values('$a','$b','$c','$d')") or die("Query Error -1");
header('location:coursereg.php?resmsg=1');
?>