<?php
$con = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($con, "course");
$cid = $_REQUEST['cid'];
$rsCourse = mysqli_query($con, "SELECT * FROM `student_info` WHERE `student_course_id`='$cid'");

$options = "";
while ($row = mysqli_fetch_array($rsCourse)) {
    $id = $row['student_id'];
    $name = $row['student_name'];
    $options .= "<option value='$id'>$name</option>";
}

echo $options;
?>
