<?php
session_start();
$servername = $_REQUEST['textServer'];
$username = $_REQUEST['textUser'];
$password = $_REQUEST['textPassword'];
$database = $_REQUEST['textDataBase'];

// Create a connection
require_once('database.php');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    $_SESSION['a'] = false;
} else {
    $_SESSION['a'] = true;
    $_SESSION['servername'] = $servername;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['database'] = $database;
     mysqli_select_db($conn, $database);

    // Create the table if it doesn't exist
    $query = "CREATE TABLE IF NOT EXISTS `fooddetails` (
        `fid` int(11) NOT NULL AUTO_INCREMENT,
        `fname` varchar(55) NOT NULL,
        ,'fprice' float NOT NULL,
        `fdiscount` float NOT NULL,
        `finalprice` float NOT NULL,
        PRIMARY KEY (`fid`),
        UNIQUE KEY `fname` (`fname`)
    )";
    mysqli_query($conn,$query);
    mysqli_close($conn);
    header("Location: index.html");
    exit();
}
?>
