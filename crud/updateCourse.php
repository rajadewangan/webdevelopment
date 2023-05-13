<?php
$a = $_REQUEST["txtCourseName"];
$b = $_REQUEST["txtTeacherName"];
$c = $_REQUEST["txtFees"];
$d = $_REQUEST["txtRegFees"];

$id = $_REQUEST["txtId"];

require_once("dbconnect.php");

mysqli_query($con, "UPDATE course SET cname='$a', tname='$b', fees='$c', regfees='$d' WHERE cid='$id'") or die("Query Error");

header("location:displayCourse.php?resmsg=2");
?>
