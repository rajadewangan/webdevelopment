<?php
require_once("header.php");
@session_start();
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
    if($_SESSION['user_type']=="admin"){
    $sql = "SELECT * FROM `order_main` ORDER BY `order_date`DESC ";
}
else
$sql = "SELECT * FROM `order_main` WHERE `user_name`='$usr' ORDER BY `order_date`DESC ";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
           <?php  if($_SESSION['user_type']=="admin"){ echo("<th>Customer Name</th>");}?>
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
            if($_SESSION['user_type']=="admin"){
            echo("<td>{$row['user_name']}</td>");
            }
            echo("<td>{$row['total_amount']}</td>");
            echo("<td>{$row['order_date']}</td>");
            echo("<td><a href='displayFinalOrder.php?odid=$id'>Details</a></td>");



           
      
            
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
