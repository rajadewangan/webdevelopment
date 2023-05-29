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
    $sql = "SELECT * FROM `user_info` WHERE `user_type`='user' ORDER BY cust_name";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Mobile</th>
            <th>User Type</th>
            <th>Customer Registration Date</th>


            


         


        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsNews)) {
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['cust_name']}</td>");
            echo("<td>{$row['cust_email']}</td>");
            echo("<td>{$row['cust_mobile']}</td>");
            echo("<td>{$row['user_type']}</td>");
            echo("<td>{$row['reg_date']}</td>");



           
      
            
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
