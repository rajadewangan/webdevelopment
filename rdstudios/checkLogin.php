<?php @session_start();
$a=$_REQUEST['txtUser'];
$b=$_REQUEST['txtPassword'];
include("dbconnect.php");
$rsUser = mysqli_query($con,"select * from user_info where user_name = '$a'") or die("Query error -1");
if(mysqli_num_rows($rsUser)==0)
{
    header("location:loginForm.php?rsmsg=1");
}
else{
    $User=mysqli_fetch_assoc($rsUser);
    if($User['user_pass']==$b)
    {
        $_SESSION['uname']=$a;
        $_SESSION['user_type']=$User['user_type'];
       if($User['user_type']=="user")
       {
        header("location:userChoice.php");
       }
       else if($User['user_type']=="admin")
       {
        header("location:adminChoice.php");

       }
    }
    else{
        header("location:loginForm.php?rsmsg=2");
    }
}


?>