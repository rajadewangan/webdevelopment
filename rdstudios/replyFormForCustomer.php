<?php
require_once("header.php");
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
    $id=$_REQUEST['complain_id'];
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `complain_info` WHERE complain_id=$id";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");
    $row = mysqli_fetch_array($rsNews);
    echo("Heading : {$row['complain_subject']}<hr>");
    echo("Complain Date : {$row['complain_date']}<hr>");
    echo("Sender Name : {$row['user_name']}<hr>");
    echo("Details : {$row['complain_descriptin']}<hr>");
  
?>

</div><!--end of rightUserArea-->
</div><!--end of userArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>