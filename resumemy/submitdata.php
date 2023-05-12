<?php session_start(); ?><?php
$_SESSION["fullname"] = $_REQUEST["fullname"];
$_SESSION["email"] = $_REQUEST["email"];
$_SESSION["phone"] = $_REQUEST["phone"];
$_SESSION["degree"] = $_REQUEST["degree"];
$_SESSION["major"] = $_REQUEST["major"];
$_SESSION["school"] = $_REQUEST["school"];
$_SESSION["Graduation"] = $_REQUEST["graduation"];
$_SESSION["position1"] = $_REQUEST["position1"];
$_SESSION["company1"] = $_REQUEST["company1"];
$_SESSION["startdate"] = $_REQUEST["startDate1"];
$_SESSION["endDate1"] = $_REQUEST["endDate1"];
$_SESSION["endDate1"] = $_REQUEST["endDate1"];
$_SESSION["responsibilities1"] = $_REQUEST["responsibilities1"];
$_SESSION["skill1"] = $_REQUEST["skill1"];
$_SESSION["skill2"] = $_REQUEST["skill2"];
$_SESSION["skill3"] = $_REQUEST["skill3"];
$_SESSION["interest"] = $_REQUEST["interests"];
$_SESSION["imagepath"] = $_FILES["Photo"];
$_SESSION["Address"]=$_REQUEST["Address"];
$_SESSION["dob"]=$_REQUEST["dob"];
// echo($_SESSION["dob"]);



$name = $_SESSION["fullname"];
$email = $_SESSION["email"];
$mobile = $_SESSION["phone"];
$degree = $_SESSION["degree"];
$major = $_SESSION["major"];
$school = $_SESSION["school"];
$gdate = $_SESSION["Graduation"];
$position1 = $_SESSION["position1"];
$company1 = $_SESSION["company1"];
$startdate = $_SESSION["startdate"];
$enddate = $_SESSION["endDate1"];
$respon = $_SESSION["responsibilities1"];
$skill1 = $_SESSION["skill1"];
$skill2 = $_SESSION["skill2"];
$skill3 = $_SESSION["skill3"];
$interest = $_SESSION["interest"];
$imgpath = $_SESSION["imagepath"];
$address = $_SESSION["Address"];
$dob=$_SESSION["dob"];



// echo($imgpath["name"]);
$imgname = $imgpath["name"];

move_uploaded_file($imgpath["tmp_name"], ".\\imagecollection\\$imgname");

require_once("dbconnect.php");
mysqli_query($con, "INSERT INTO `saveddataresume`(`fullname`, `email`, `mobile`, `saddress`, `degree`, `major`, `school`, `gdate`, `position1`, `company`, `startdate`, `enddate`, `respon`, `skill1`, `skill2`, `skill3`, `interest`, `imgpath`) VALUES ('$name','$email','$mobile','$address','$degree','$major','$school','$gdate','$position1','$company1','$startdate','$enddate','$respon','$skill1','$skill2','$skill3','$interest','$imgname')") or die("Querry Error");

header("location:firsttemplate.php");

?>