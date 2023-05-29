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
    echo("<div id='newsDetails'><h1>{$row['complain_name']}</h1><div>
           <span>{$row['complain_date']}</span> </div></div>
          <p>{$row['complain_description']}</p>
          </a href='reply.php?complain_id='$id'>Reply</a>");


    ?>

</div><!--end of rightUserArea-->
</div><!--end of userArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>