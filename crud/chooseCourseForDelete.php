<html>
<body>

<form method="get" action="deleteCourse.php">
Choose Course Name <select name='did'>

<option value="0"> Choose Course Name </option>
<?php 
  include("dbconnect.php");
  $rsCourse=mysqli_query($con,"select * from course order by cname");

  while($row=mysqli_fetch_array($rsCourse))
  {
    $a=$row["cid"];
    $b=$row["cname"];
    echo("<option value='$a'> $b </option>");
  }

?>

</select>

<input type="submit" value="Delete Course">


</form>


</body>

</html>