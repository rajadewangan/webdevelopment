<?php
include("header.php");
?>
<div id="container" >
<div id="userArea" class="row">
<div id="leftUserArea">

    <?php
     require_once("userMenu.php");
    ?>

</div><!--end of leftUserArea-->

<div id="rightUserArea">
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
  ?>
<form method="get" action="insertComplain.php">
<label>Complain To </label>
<input type="text" name='txtTo' value='admin'>
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

</div><!--end of rightUserArea-->
</div><!--end of userArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>