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
     $usr = $_SESSION['uname'];
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `order_main`  where `user_name`='$usr' ORDER BY `order_date`DESC";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Total Ammount</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Details</th>



            


         


        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsNews)) {
            $id=$row['order_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['total_amount']}</td>");
            echo("<td>{$row['order_date']}</td>");
            echo("<td>{$row['order_status']}</td>");
            
            echo("<td><a href='adminOrderDetails.php?order_id=$id'>Details</a></td>");



           
      
            
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