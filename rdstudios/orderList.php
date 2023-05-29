<?php
@session_start();

require_once("header.php");

?>
<div id="container">
<div id="adminArea" class="row">
<div id="leftAdminArea">

    <?php
     require_once("adminMenu.php");
    ?>

</div><!--end of leftAdminArea-->

<div id="rightAdminArea">

    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `order_main` ORDER BY `order_date`DESC ";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Customer Name</th>
            <th>Total Ammount</th>
            <th>Order Date</th>
            <th>Details</th>


            


         


        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsNews)) {
            $id=$row['order_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['user_name']}</td>");
            echo("<td>{$row['total_amount']}</td>");
            echo("<td>{$row['order_date']}</td>");
            echo("<td><a href='orderDetails.php?$id'>Details</a></td>");



           
      
            
            echo("</tr>");
        }
       
        ?>
    </table>
    
</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div> <!--end of container-->
<?php
require_once("footer.php");
?>
