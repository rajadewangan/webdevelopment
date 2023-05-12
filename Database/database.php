<?php
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$database);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $a= false;
}
else
{
    $_SESSION['a'] = true;
}
?>