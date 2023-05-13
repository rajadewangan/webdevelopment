<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php  if(isset($_REQUEST['resmsg']))
            {
                echo("<div id='resmessage'>");
                if($_REQUEST['resmsg']==1){
                    echo("Your data has been deleted");
                }
                else if($_REQUEST['resmsg']==2)
                {
                    echo("your data has been updated");
                }
                echo("</div>");
            }
         require_once('dbconnect.php');
         $query = 'select * from course';
         $rsCourse = mysqli_query($con,$query);

         echo('<table border=1>');
         echo("<tr><th>S.NO.</th>");
         echo("<th>Course</th>");
         echo("<th>Teacher Name</th>");
         echo("<th>Fees</th>");
         echo("<th>Registration Fees</th>");
         echo("<th>Status</th>");
         echo("</tr>");
         $cnt = 0;
         while($row=mysqli_fetch_array($rsCourse))
         {
             $id=$row["cid"];
            $cnt++;
            echo('<tr>');
            echo('<td>'.$cnt.'</td>');
            echo('<td>'.$row['cname'].'</td>');
            echo('<td>'.$row['tname'].'</td>');
            echo('<td>'.$row['fees'].'</td>');
            echo('<td>'.$row['regfees'].'</td>');
            echo('<td>'."<a href='deleteCourse.php?did=$id'>Delete</a> &nbsp; &nbsp;&nbsp;||&nbsp;&nbsp;");
            echo("<a href='editCourse.php?did=$id'>Edit</a>".'</td>');
            
            echo('</tr>');
         }
    ?>
</body>
</html>