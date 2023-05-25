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
         echo("Your data has been saved");
       }
       else if($_REQUEST['resmsg']==2)
       {
         echo("");
       }
      
      echo("</div>");
    }
    ?>

<form method="post" action="insertOffer.php" enctype="multipart/form-data">
   <label for="txtName">Enter Offer Name</label>
   <input type="text" name="txtName">
 
  <label for="numDiscount">Enter Discount</label>
  <div class="input-group mb-3">
      <input name="numDiscount" type="number" class="form-control" placeholder="IN %" aria-label="Blank if you don't want to give discount" aria-describedby="basic-addon1" style="width:auto;">
      <span class="input-group-text" id="basic-addon1">%</span>
  </div>

  <label for="dtStart">Enter offer starting date:</label>
          <div class="input-group date" id="datepicker" data-target-input="nearest">
            <input type="date" name='dtStart' class="form-control datetimepicker-input" data-target="#datepicker" />
          </div>
<label for="dtEnd">Enter offer closing date:</label>
     <div class="input-group date" id="datepicker" data-target-input="nearest">
       <input type="date" name='dtEnd' class="form-control datetimepicker-input" data-target="#datepicker" />
     </div>


 
 <label for="cmbCat">Choose Applicable Category</label>
 <select name="cmbCat"  aria-label=" Choose Applicable Category" name="cmbCatType">
 <option selected value='0'>All categories</option>
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