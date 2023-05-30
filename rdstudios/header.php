<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
   
<link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  
    <link rel="stylesheet" href="./css/style.css" type="text/css">

</head>
<body>
    <div id="main" class="col">
        <div id="header">
            <div id="leftlogo">
            <a href="index.php"><img src="./Images/logo1.png" alt="Logo">  </a>
            </div><!--End of leftlogo-->
          
            <div id="title">
                <h1>RD Studios</h1>
                <h3>Discover Your Style, Shop with Confidence</h3>
                <?php
                @session_start();
                if(isset($_SESSION['uname']))
                {
                    $username = $_SESSION['uname'];
                    echo('
                    <div id="loginUserInfo">');
                    echo("<h2>Welcome $username <a href='logout.php' > Logout </a></h2>    
                </div>");
                }
                ?>
            </div><!--End of title-->
            <div id="rightlogo">
                <img src="./Images/categories.png" alt="categories">
            </div> <!--End of rightlogo-->
        </div> <!--End of header -->
    
