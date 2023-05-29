<?php 
$category_id = $_REQUEST['category_id'];


require_once("dbconnect.php");

 $sql="DELETE FROM `category_info` WHERE cat_id='$cat_id'";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:categoryList.php?resmsg=1");
?>