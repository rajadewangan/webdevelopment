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
    $sql = "SELECT ci.cart_id, ci.item_rate, ci.item_quantity, ii.item_name, ii.item_img
     FROM cart_info AS ci, item_info AS ii WHERE ci.item_id = ii.item_id  AND username = '$usr'";
    //  echo($usr);
    $rsCart = mysqli_query($con, $sql) or die("Query Error -1");
   

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Item Name</th>
            <th>Image</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
        <?php
        $cnt = 0;
        $total = 0;
        while ($row = mysqli_fetch_array($rsCart)) {
            $item_rate = $row['item_rate'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['item_name']}</td>");
            $img ="./collection/".$row['item_img'];
            echo("<td><img src='$img' height='100px' width='100px'></td>");
            echo("<td>$item_rate</td>");
            echo("<td>$quantity</td>");
            $amount = $item_rate * $quantity;
            $total += $amount;
            echo("<td>$amount</td>");
            echo("<td><a href='deleteCart.php'?itemid=$>Delete</a></td>");

            echo("</tr>");
        }
        echo("<tr><td colspan='5'>Total</td><td colspan='2'>Rs. $total</td></tr>");
        ?>
    </table>
    <a href='addressFormForOrder.php?amnt=<?=$total?>' id='placeOrder'>Place Order</a>

</div><!--end of rightUserArea-->
</div><!--end of userArea-->
</div><!--end of container-->


<?php
require_once("footer.php");
?>