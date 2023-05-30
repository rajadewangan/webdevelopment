<?php
$order_id = $_REQUEST['order_id'];
$order_status = $_REQUEST['order_status'];
require_once("dbconnect.php");
$sql = "UPDATE `order_main` SET `order_status`='$order_status' ,`last_update_date`=now() WHERE `order_id`='$order_id'";
mysqli_query($con,$sql);
header("location:adminOrderList.php?resmsg=1");
?>