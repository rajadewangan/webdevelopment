<?php

require_once("header.php");


?>
<div id="container">
<div id="myForm">
<form method="get" action="insertCart.php">
<label>Enter Product Quantity</label>
<input type="text" name="txtQuantity" />

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