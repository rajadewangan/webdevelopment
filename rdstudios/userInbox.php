<?php
@session_start();
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
     $usr=$_SESSION['uname'];
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `complain_info` where `receiver_name`='$usr' ORDER BY `complain_date` DESC";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Customer Name</th>
            <th>Subject</th>
            <th>Details</th>
            <th>Complain Date</th>


        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsNews)) {
            $id=$row['complain_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['user_name']}</td>");
            echo("<td>{$row['complain_subject']}</td>");

           
            echo("<td><a href='replyFormForCustomer.php?complain_id=$id'>Check Details</a></td>");
            
            echo("<td>{$row['complain_date']}</td>");
            
            echo("</tr>");
        }
       
        ?>
    </table>
</div><!--end of rightUserArea-->
</div><!--end of userArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>