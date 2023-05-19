<?php

require_once("header.php");

?>
<div id="container">
<div id="myForm">
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
<div id="submit">
<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</div><!--end of submit-->
</form>


</div><!--end of myForm-->
</div> <!--end of container-->
<?php
require_once("footer.php");
?>