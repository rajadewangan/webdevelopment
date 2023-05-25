<?php 
  include("dbconnect.php");
  
  $str="";
  function getChildInfo($cid)
  {
    $GLOBALS["str"]=$GLOBALS["str"]. $cid."-"; 
    
    $rscat=mysqli_query($GLOBALS["con"],"select cat_id from category_info where cat_parent_id='$cid'");
    while($row=mysqli_fetch_array($rscat))
    {
            $c=$row["cat_id"];
            getChildInfo($c);
    }
    return($GLOBALS["str"]);
  }
  $a=$_REQUEST["txtName"];
  $b=$_REQUEST["numDiscount"];
  $c=$_REQUEST["dtStart"];
  $d=$_REQUEST["dtEnd"];
  $e=$_REQUEST["cmbCat"];


  $tempdt=strtotime("1 day",strtotime($d));
  $newdate=date('Y-m-d',$tempdt);

  



  $cats=getChildInfo($e);

  $newcats=substr($cats,0,strlen($cats)-1);



  


 
  $sql="INSERT INTO `offer_info`(`offer_name`, `offer_discount`, `offer_start_date`, `offer_end_date`, `offer_category_ids`, `offer_registration_date`) 
  VALUES ('$a','$b','$c','$newdate','$newcats',now())";
 mysqli_query($con,$sql) or die("Query error");
 header("location:offerForm.php?resmsg=1");


?>