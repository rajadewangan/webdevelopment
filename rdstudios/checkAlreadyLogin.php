<?php @session_start();
$_SESSION['item_id']=$_REQUEST['item_id'];
$_SESSION['item_rate']=$_REQUEST['rate'];
 if(isset($_SESSION['uname']))
 {

    header("location:quantityFormForCart.php");
 }
 else{
    header("location:newLoginForm.php");
 }


?>