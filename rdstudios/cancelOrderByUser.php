<?php
$a=$_REQUEST['order_id'];
$sql = "DELETE om, odm
FROM `order_main` as om
INNER JOIN `order_detail` as odm ON om.`order_id` = odm.`order_parent_id`
WHERE om.`order_id` = '$a'";
require_once("dbconnect.php");
mysqli_query($con,$sql);
header("location:displayOrderMasterForCancelUser.php?resmsg=1");

?>