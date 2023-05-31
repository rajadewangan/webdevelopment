<?php
@session_start();
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
           echo("Profile updated successfully");
        }
        else if($_REQUEST['rsmsg']==2)
        {
            echo("Given username already exist");
        }
        echo("</div>");
    }
    $usr=$_SESSION['uname'];
    require_once("dbconnect.php");
    $sql='SELECT * FROM `user_info` WHERE `user_name`="'.$usr.'"';
    $rsUser=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($rsUser);
    ?>

<form method="get" action="updateCustomer.php">
<label>Enter your name</label>
<input type="text" name="txtName" value="<?=$row['cust_name']?>"/>
<label>Enter your Email id</label>
<input type="text" name="txtEmail" value="<?=$row['cust_email']?>"/>
<label>Enter your Mobile No</label>
<input type="text" name="txtMobile" value="<?=$row['cust_mobile']?>"/>
<label>Enter your user name</label>
<input type="text" name="txtUser" readonly value="<?=$row['user_name']?>" />
<label>Enter your password</label>
<input type="password" name="txtPassword" value="<?=$row['user_pass']?>"/>
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