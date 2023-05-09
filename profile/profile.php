<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }
        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
        }
        .profile-info h2 {
            margin: 0;
            font-size: 24px;
        }
        .profile-info p {
            margin: 0;
            font-size: 16px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="profile">
        <div class="profile-picture">
            <?php
            if (isset($_GET['name']) && isset($_GET['photo'])) {
                $name = $_GET['name'];
                $photo = $_GET['photo'];
                echo '<img src="' . $photo . '" alt="' . $name . '">';
            }
            ?>
        </div>
        <div class="profile-info">
            <?php
            if (isset($_GET['name']) && isset($_GET['address']) && isset($_GET['phone']) && isset($_GET['dob'])) {
                $name = $_GET['name'];
                $address = $_GET['address'];
                $phone = $_GET['phone'];
                $dob = $_GET['dob'];

                echo '<h2>' . $name . '</h2>';
                echo '<p><strong>Address:</strong> ' . $address . '</p>';
                echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
                echo '<p><strong>Date of Birth:</strong> ' . $dob . '</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
