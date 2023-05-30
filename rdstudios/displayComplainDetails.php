<?php
require_once("header.php");
?>
<div id="container" >
<div id="adminArea" class="row">
<div id="leftAdminArea">

    <?php
    if($_SESSION['user_type']=='admin'){

     require_once("adminMenu.php");
    }
    else{
        require_once("userMenu.php");
    }
    ?>

</div><!--end of leftAdminArea-->

<div id="rightAdminArea">
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
    $username=$row['user_name'];
    echo("<div id='replyButton'>");
    if($_SESSION['user_type']=='admin'){
    echo("<a href='replyForm.php?customer_name=$username&customer_id=$id'>Reply</a>");
}
    else if($_SESSION['user_type']=='user')
    {
    echo("<a href='replyFormForCustomer.php?customer_name=$username&customer_id=$id'>Reply</a>");
    }
    echo("</div>");




    // echo("<div id='newsDetails'><h1>{$row['complain_subject']}</h1><div>
    //        <span>{$row['complain_date']}</span> </div></div>
    //       <p>{$row['complain_descriptin']}</p>");
    //       if($row['reply_description']==NULL){
    //       echo("<a href='replyForm.php?complain_id=$id'>Reply</a>");
    //          }

    //     else{
    //      echo("<HR><p>{$row['reply_description']}</p>");
    //     }


    ?>

</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>