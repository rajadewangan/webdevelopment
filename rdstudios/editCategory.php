<?php
 $a=$_REQUEST["txtName"];
 $b=$_REQUEST["txtDName"];

 $d=$_REQUEST["cmbCatType"];
 $cat_id=$_REQUEST['category_id'];
 require_once("dbconnect.php");
 if($d=="Primary")
 {
    $e=0;
 }
 else 
 {
 $e=$_REQUEST["cmbParent"];
 }
 if(empty($_FILES['flImage']))
 {
    $sql="UPDATE `category_info` SET `cat_name`='$a',`cat_dname`='$b',
    `cat_type`='$d',`cat_parent_id`='$e'WHERE cat_id=$cat_id";
 }
 else{
     $img = $_FILES['flImage']['name'];
     $extension = pathinfo($img, PATHINFO_EXTENSION);  //store the extension name
    $filenameWithoutExtension = pathinfo($img, PATHINFO_FILENAME); //store file name without extension
    $imgname = "$filenameWithoutExtension" . "_" . time() . "." . "$extension";
    move_uploaded_file($_FILES['flImage']['tmp_name'],"./collection/$imgname");
 
     $sql="UPDATE `category_info` SET `cat_name`='$a',`cat_dname`='$b',`image_path`='$imgname',
     `cat_type`='$d',`cat_parent_id`='$e'WHERE cat_id=$cat_id";
     }

     mysqli_query($con,$sql) or die("Query error -1");
     header("location:categoryList.php?resmsg=1");

?>