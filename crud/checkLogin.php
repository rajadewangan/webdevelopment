<?php session_start();
  $a=$_REQUEST["txtName"];
  $b=$_REQUEST["txtPass"];

 require_once("dbconnect.php");

  $rsuser=mysqli_query($con,"select * from user_info where username='$a'");
  if(mysqli_num_rows($rsuser)==0)
  {
    header("location:loginForm.php?resmsg=1");
  }
  else 
  {
     $row=mysqli_fetch_array($rsuser);
     if($row["userpass"]==$b)
     {
        $_SESSION["uname"] =$a;
         if($row["usertype"]=="user")
           header("location:userChoice.php");
         else if($row["usertype"]=="admin")  
         header("location:adminChoice.php");

     }
     else 
     {
        header("location:loginForm.php?resmsg=2");
     }
  }

?>