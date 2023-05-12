<?php
session_start();
$fname = $_REQUEST['txtFoodName'];
$fprice = $_REQUEST['numberFoodPrice'];
$fdiscount = $_REQUEST['numberFoodDiscount'];
$finalprice = $fprice - ($fdiscount != 0 ? $fprice / $fdiscount : 0);

if ($_SESSION['a'] == true) {
    $servername = $_SESSION['servername'];
     $username =$_SESSION['username'];
    $password =$_SESSION['password'];
    $database =$_SESSION['database'];
    require_once("database.php");
    mysqli_query($conn, "INSERT INTO `fooddetails`(`fname`,`fprice`, `fdiscount`, `finalprice`) VALUES ('$fname',$fprice,$fdiscount,$finalprice)");
    echo "<h1>Data was successfully inserted</h1>";
} else {
    header("Location: login.html");
    exit();
}
?>
