<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="./style.css" type="txt/css" rel="stylesheet"> -->
     <link href="./style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
     if(isset($_REQUEST["resmsg"]))
        {
     echo("<div id='resmessage'>");
      if($_REQUEST['resmsg']==1)
      {
         echo("Your data has been saved");
      }

     echo("</div>");
    }
    ?>
    <form action="savedata.php" method="get">
        <label for="txtCourseName">Enter Course Name</label>
        <input type="text" name="txtCourseName"> <br>
        <label for="txtTeacherName">Enter Teacher Name</label>
        <input type="text" name="txtTeacherName"> <br>
        <label for="txtFees">Enter Course Fees</label>
        <input type="text" name="txtFees"> <br>
        <label for="txtRegFees">Enter Registration Fees</label>
        <input type="text" name="txtRegFees"> <br>
        <input type="submit" value="Ok">
    </form>
    <a href="displayCourse.php">List of all Courses</a>
   <br><br> 
<a href="chooseCourseForDelete.php">
     Delete Single Courses
   </a>  
</body>
</html>