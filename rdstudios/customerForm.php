<?php
require_once("header.php");
?>

<div id="container">
    <div id="myForm">
    <?php
    if(isset($_REQUEST['rsmsg']))
    {
        echo("<div id='rsmessage'>");
        if($_REQUEST['rsmsg']==1)
        {
           echo("You registered successfully");
        }
        else if($_REQUEST['rsmsg']==2)
        {
            echo("Given username already exist");
        }
        echo("</div>");
    }
    ?>

    <form method="get" action="insertCustomer.php">
<label>Enter your name</label>
<input type="text" name="txtName" />
<label>Enter your Email id</label>
<input type="text" name="txtEmail" />
<label>Enter your Mobile No</label>
<input type="text" name="txtMobile" />
<label>Enter your user name</label>
<input type="text" name="txtUser" />
<label>Enter your password</label>
<input type="password" name="txtPassword" />
<div id='formButtons'>
<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</div>
</form>


</div><!--end of myForm-->
</div><!--end of container--> 

    </div>
</div>


<?php
require_once("footer.php");
?>