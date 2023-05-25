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
  <form method="post" action="insertNews.php" enctype="multipart/form-data">
   <label for="txtName">Enter News name</label>
   <input type="text" name="txtName">
   
<div class="input-group-prepend">
    <span class="input-group-text">Enter News Description</span>
  </div>
  <textarea name="txtAreaNewsDes" row='5' class="form-control" aria-label="With textarea"></textarea>


   <label for="dtPub">Enter News Publication date:</label>
          <div class="input-group date" id="datepicker" data-target-input="nearest">
            <input type="date" name='dtPub' class="form-control datetimepicker-input" data-target="#datepicker" />
          </div>

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