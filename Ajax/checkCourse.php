<?php
$con = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($con, "course");
$rsCourse = mysqli_query($con, "SELECT * FROM `course_info`");

$options = "";
while ($row = mysqli_fetch_array($rsCourse)) {
    $id = $row['course_id'];
    $name = $row['course_name'];
    $options .= "<option value='$id'>$name</option>";
}

echo $options;
?>
