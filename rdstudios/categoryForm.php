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
  ?>
  <form method="post" action="insertCategory.php" enctype="multipart/form-data">
   <label for="txtName">Enter Category Name</label>
   <input type="text" name="txtName">
   <label for="txtDName">Enter Category Display Name</label>
   <input type="text" name="txtDName">

   <label class="input-group-text" for="inputGroupFile02">Choose Category Image</label>
   <input type="file" class="form-control" id="inputGroupFile02" name="flImage">
 
  <select name="cmbCatType" class="form-select" aria-label="Default select example" > 
  <option selected>Choose Primart or Secondary</option>
  <option >Primary</option>
  <option >Secondary</option>
  </select>

 <select name="cmbParent"  aria-label="Default select example" name="cmbCatType">
 <option selected>Choose Parent Category Here</option>
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