<?php
 $a=$_REQUEST["txtName"];
 $b=$_REQUEST["txtDName"];
 $c=$_REQUEST["numPrice"];
 $f=isset($_REQUEST['numDiscount'])? $_REQUEST["numDiscount"]:0;
 $e=$_REQUEST["cmbCat"];

 $img = $_FILES['flImage']['name'];
 $extension = pathinfo($img, PATHINFO_EXTENSION);  //store the extension name
    $filenameWithoutExtension = pathinfo($img, PATHINFO_FILENAME); //store file name without extension
    $imgname = "$filenameWithoutExtension" . "_" . time() . "." . "$extension";
    $targetPath = "./collection/" . $imgname;
    move_uploaded_file($_FILES['flImage']['tmp_name'],$targetPath);
    require_once("dbconnect.php");
    $sql = "INSERT INTO `item_info`(`item_name`, `item_dname`, `item_price`, `item_discount`, `item_img`, `item_category`, `reg_date`) 
    VALUES ('$a','$b','$c','$f','$imgname','$e',now())";
     mysqli_query($con,$sql) or die("Query error -1");
     header("location:itemForm.php?resmsg=1");

?>