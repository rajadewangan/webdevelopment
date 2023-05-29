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
    $sql = "SELECT * FROM `offer_info` ORDER BY `offer_start_date` DESC";

    $rsOffer = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Offer Name</th>
            <th>Offer Discount</th>
            <th>Offer Applicable categories</th>
            <th>Offer Start Date</th>
            <th>Offer End Date</th>
            <th>Status</th>
            

        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsOffer)) {
            $id=$row['offer_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['offer_name']}</td>");
            echo("<td>{$row['offer_discount']}</td>");
            $offer_categories = $row['offer_category_ids'];
            $offer_categories = explode("-",$offer_categories);
            $offer_categories = $offer_categories[0];
            $sql = "select cat_name from category_info where cat_id='$offer_categories'";
            $rsCat=mysqli_query($con,$sql) or die("Query Error -1");
            $r = mysqli_fetch_array($rsCat);
            
            echo("<td>{$r['cat_name']}</td>");

            echo("<td>{$row['offer_start_date']}</td>");
            echo("<td>{$row['offer_end_date']}</td>");
            


           
            echo("<td><a href='editOffer.php?offer_id=$id'>Edit &nbsp;&nbsp;|</a>
            <a href='deleteOffer.php?offer_id=$id'>Delete</a></td>");
      
            
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
