<?php
session_start();



$_SESSION['servername']= $_REQUEST['servername'];
$_SESSION['username'] = $_REQUEST['username'];
$_SESSION['password'] = $_REQUEST['password'];
$_SESSION['database'] = $_REQUEST['database'];
 $servername =$_SESSION['servername'] ;
  $username =  $_SESSION['username'] ;
  $password =  $_SESSION['password'] ;
  $database =  $_SESSION['database'] ;
// Create a connection
require_once('database.php');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database if it doesn't exist
$query = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($conn, $query)) {
   // echo "Database created successfully<br>";

    // Select the database
    mysqli_select_db($conn, $database);

    // Create the table if it doesn't exist
   $query = "CREATE TABLE IF NOT EXISTS `fooddetails` (
        `fid` int(11) NOT NULL AUTO_INCREMENT,
        `fname` varchar(55) NOT NULL,
        `fprice` float NOT NULL,
        `fdiscount` float NOT NULL,
        `finalprice` float NOT NULL,
        PRIMARY KEY (`fid`),
        UNIQUE KEY `fname` (`fname`)
    )";

    if (mysqli_query($conn, $query)) {
       // echo "Table created successfully<br>";
    } else {
       // echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    $_SESSION['a'] = true;
    header("Location: index.html");
    exit();
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
?>
