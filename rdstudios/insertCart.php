<?php
@session_start();
$a=$_REQUEST['txtQuantity'];
$username = $_SESSION['uname'];
$item_id = $_SESSION['item_id'];
$item_rate = $_SESSION['item_rate'];

require_once("dbconnect.php");
$sql = "INSERT INTO `cart_info`(`item_id`, `item_rate`, `item_quantity`, `username`) 
       VALUES ('$item_id','$item_rate','$a','$username')";
mysqli_query($con,$sql) or die("Query Error !");
header("location:displayCartInfo.php?quantity=$a");
?>