<?php 
$item_id = $_REQUEST['item_id'];


require_once("dbconnect.php");

 $sql="DELETE FROM `item_info` WHERE item_id='$item_id'";
 mysqli_query($con,$sql) or die("Query Error - 1");
 header("location:itemList.php?resmsg=1");
?>