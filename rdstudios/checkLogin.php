<?php @session_start();
$a=$_REQUEST['txtUser'];
$b=$_REQUEST['txtPassword'];
include("dbconnect.php");
$rsUser = mysqli_query($con,"select * from user_info where username = '$a'") or die("Query error -1");
if(mysqli_num_rows($rsUser)==0)
{
    header("location:loginForm.php?rsmsg=1");
}
else{
    if($rsUser['user_pass']==$b)
    {
       if($rsUser['user_type']=="user")
       {
        header("location:userChoice.php");
       }
       else if($rsUser['user_type']=="admin")
       {
        header("location:adminChoice.php");

       }
    }
    else{
        header("location:loginForm.php?rsmsg=2");
    }
}


?>