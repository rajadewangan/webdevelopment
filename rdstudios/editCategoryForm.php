<?php
require_once("header.php");
require_once("dbconnect.php");
?>
<div id="container" >
<div id="adminArea" class="row">
<div id="leftAdminArea">

    <?php
     require_once("adminMenu.php");
    ?>

</div><!--end of leftAdminArea-->

<div id="rightAdminArea">
<?php 
   if(isset($_REQUEST['resmsg']))
   {
     echo("<div id='resmessage'>");
      if($_REQUEST['resmsg']==1)
      {
        echo("Your Data Has Been Saved");
      }
   
     
     echo("</div>");
   }
   $id = $_REQUEST['category_id'];
   $sql = "select * from category_info where cat_id='$id'";
   $rsCat = mysqli_query($con,$sql);
   $row= mysqli_fetch_array($rsCat);
  ?>
  <form method="post" action="editCategory.php" enctype="multipart/form-data">
    <input type="hidden" name='category_id' value='<?=$id?>'>
   <label for="txtName" >Enter Category Name</label>
   <input type="text" name="txtName" value='<?=$row["cat_name"]?>'>
   <label for="txtDName">Enter Category Display Name</label>
   <input type="text" name="txtDName" value='<?=$row["cat_dname"]?>'>

   <label class="input-group-text" for="inputGroupFile02">Choose Category Image</label>
   <input type="file" class="form-control" id="inputGroupFile02" name="flImage">
 
   <label for="cmbCatType">Choose Primart or Secondary</label>
  <select name="cmbCatType" class="form-select" aria-label="Default select example" > 
  <option selected><?=$row["cat_type"]?></option>
  <option >Primary</option>
  <option >Secondary</option>
  </select>
<?php

$cat_parent_id=$row['cat_parent_id'];
$sql2 = " select * from category_info where cat_id='$cat_parent_id'";
$rsCats=mysqli_query($con,$sql2) or die("Query Error -1");
$r=mysqli_fetch_array($rsCats);
?>
   <label for="cmbParent" class="inputGroupText">Choose Parent Category</label>
 <select name="cmbParent"  aria-label="Default select example">
  <?php
if(($row['cat_parent_id'])>0){
  $h=$r['cat_name'];
}
else{
    $h='Select Parent Category';
}
  ?>

 <option selected><?=$h?></option>
 <?php 
 require_once("dbconnect.php");
 $sql = "SELECT `cat_id`, `cat_name` FROM `category_info` order by cat_name";
 $rsCat = mysqli_query($con,$sql) or die("Query Error -1");
 while($row = mysqli_fetch_array($rsCat))
 {

    $id = $row['cat_id'];
    echo("<option value='$id'>");
    echo($row['cat_name']);
    echo("</option>");
 }
 ?>

</select>

 <div id="formButtons">
 <button type="submit" class="btn btn-outline-success mt-2">Submit</button>
 <button type="reset" class="btn btn-outline-danger mt-2">Reset</button>
 </div>
</form>

</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>