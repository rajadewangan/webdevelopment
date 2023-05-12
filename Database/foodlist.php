<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
     $servername = $_SESSION['servername'];
     $username =$_SESSION['username'];
    $password =$_SESSION['password'];
    $database =$_SESSION['database'];
    require_once('database.php');
    $query = "SELECT * FROM fooddetails";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>S. NO </th><th>Name</th><th> Price </th> <th> Discount </th> <th> Final Price </th></tr>";

    // Fetch the rows of data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['fid'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
         echo "<td>" . $row['fprice'] . "</td>";
        echo "<td>" . $row['fdiscount'] ." %". "</td>";
         echo "<td>" . $row['finalprice'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
    ?>
    
</body>
</html>