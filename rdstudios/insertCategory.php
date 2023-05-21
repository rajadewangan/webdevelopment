<?php
 $a=$_REQUEST["txtName"];
 $b=$_REQUEST["txtDName"];

 $d=$_REQUEST["cmbCatType"];
 if($d=="Primary")
 {
    $e=0;
 }
 else 
 {
 $e=$_REQUEST["cmbParent"];
 }
 $img = $_FILES['flImage'];
 $extension = pathinfo($img, PATHINFO_EXTENSION);  //store the extension name
    $filenameWithoutExtension = pathinfo($img, PATHINFO_FILENAME); //store file name without extension
    $imgname = "$filenameWithoutExtension" . "_" . time() . "." . "$extension";
    move_uploaded_file($img['tmp_name'],"./collection/$imgname");
    require_once("dbconnect.php");
    $sql = "INSERT INTO `category_info`(`cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`)
     VALUES ('$a','$b','$imgname','$d','$e',now())";
     mysqli_query($con,$sql) or die("Query error -1");
     header("location:categoryForm.php?resmsg=1");

?>