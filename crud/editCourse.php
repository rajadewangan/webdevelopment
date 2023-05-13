<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    $id = $_REQUEST['did'];
    require_once('dbconnect.php');
    $query = "SELECT * FROM course WHERE cid='$id'";
    $rsCourse = mysqli_query($con, $query) or die("Query Error");
    $row = mysqli_fetch_array($rsCourse);
    ?>

    <form action="updateCourse.php?txtId=<?= $id ?>" method="post">
        <label for="txtCourseName">Enter Course Name</label>
        <input type="text" name="txtCourseName" value="<?= $row['cname'] ?>"><br>

        <label for="txtTeacherName">Enter Teacher Name</label>
        <input type="text" name="txtTeacherName" value="<?= $row['tname'] ?>"><br>

        <label for="txtFees">Enter Course Fees</label>
        <input type="text" name="txtFees" value="<?= $row['fees'] ?>"><br>

        <label for="txtRegFees">Enter Registration Fees</label>
        <input type="text" name="txtRegFees" value="<?= $row['regfees'] ?>"><br>

        <input type="submit" value="Ok">
    </form>
    <a href="displayCourse.php">List of all Courses</a>
</body>
</html>
