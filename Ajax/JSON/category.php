<?php
    
    $con=mysqli_connect("127.0.0.1","root","","rdstudios");
    $rsCat=mysqli_query($con,"SELECT `cat_id`, `cat_name`, `cat_type` FROM `category_info`");
    $rsCatData = array();
    while($row=mysqli_fetch_assoc($rsCat))
    {
        $rsCatData[]=$row;
    }
    $rsCatDataJson = json_encode($rsCatData);
    echo($rsCatDataJson);
?>