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
        echo("Your complain registered successfully");
      }
      else if($_REQUEST['resmsg']==2)
      {
        echo("Invalid Password");
      }
     
     echo("</div>");
   }
   $username=$_REQUEST['customer_name'];
   
   ?>
   <form method="get" action="insertComplain.php">
     <!-- <input type="hidden" value='<?=$complain_id?>' name='complain_id'> -->
     <label>Complain To </label>
      <input type="text" name='txtTo' value='<?=$username?>'>
      <label>Complain Heading </label>
      <input type="text" name='txtSubject'>
      <label>Complain Detail</label>
      <textarea rows='10' name="txtDescription"     height='5rem'></textarea>
      <div id='formButtons'>
      <input type="submit" value="Ok" />
      <input type="reset" value="Cancel" />
      </div>
      </form>


</div><!--end of myForm-->

</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>