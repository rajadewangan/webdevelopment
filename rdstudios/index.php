<?php
require_once("header.php");
?>

<div id="container">
  <div id="login_logout">
    <a href="loginForm.php">Login &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
    <a href="customerForm.php">New User</a>
  </div>

  <div id='categoryContainer'>
    <?php
  if(isset($_REQUEST["cid"]))
    $prid=$_REQUEST['cid'];
  else 
    $prid=0;

    require_once("dbconnect.php");
    $sql = "SELECT * FROM `category_info` where cat_parent_id=$prid order by cat_dname";
    $rsCat = mysqli_query($con,$sql) or die("Query Error !");
    while($row=mysqli_fetch_array($rsCat))
  {
     $id=$row['cat_id'];
     $cname=$row['cat_dname'];
     echo("<div class='category'>");
     echo("<a href='index.php?cid=$id'>");
     echo($cname."<br><br>");
     $img=$row['image_path'];
     
     echo("<img src='.\\collection\\$img' width='100' height='100' border='1'> ");
     echo("</a>");
     echo("</div>");

  }
  ?>
</div><!--end of categoryContainer-->
</div><!--end of container -->




<?php
require_once("footer.php");
?>