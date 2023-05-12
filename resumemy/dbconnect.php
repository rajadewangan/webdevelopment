<?php

$con=mysqli_connect("127.0.0.1","root","") or die("Database Connection Error");
mysqli_select_db($con,"resumedata") or die("Database Selection Error");

?>