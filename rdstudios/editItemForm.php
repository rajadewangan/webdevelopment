<?php
require_once("header.php");
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
   $id = $_REQUEST['item_id'];
   $sql = "select * from item_info where item_id='$id'";
   $rsCat = mysqli_query($con,$sql);
   $row= mysqli_fetch_array($rsCat);
  ?>
  <form method="post" action="editItem.php" enctype="multipart/form-data">
   <label for="txtName">Enter Item Name</label>
   <input type="text" name="txtName" value="<?=$row['item_name']?>">
   <label for="txtDName">Enter Item Display Name</label>
   <input type="text" name="txtDName" value="<?=$row['item_dname']?>">

   <label for="numPrice">Enter Price</label>
   <div class="input-group mb-3">
  <span class="input-group-text">&#8377;</span>
  <input type="number" name="numPrice" value="<?=$row['item_price']?>" class="form-control" aria-label="Amount (to the nearest dollar)" style="width:auto;">
  <span class="input-group-text">.00</span>
  </div>

  <label for="numDiscount">Enter Discount</label>
  <div class="input-group mb-3">
      <input name="numDiscount" type="number" value="<?=$row['item_name']?>" class="form-control" placeholder="Blank if you don't want to give discount" aria-label="Blank if you don't want to give discount" aria-describedby="basic-addon1" style="width:auto;">
      <span class="input-group-text" id="basic-addon1">%</span>
</div>

<div class="input-group-prepend">
    <span class="input-group-text">Enter Description</span>
  </div>
  <textarea name="txtAdes" class="form-control" aria-label="With textarea"></textarea>

   <label class="input-group-text" for="inputGroupFile02">Choose Item Image</label>
   <input type="file" class="form-control" id="inputGroupFile02" name="flImage">
 


 <select name="cmbCat"  aria-label="Default select example" name="cmbCatType">
 <option selected>Choose Category </option>
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