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
    $sql = "SELECT * FROM `complain_info`  ORDER BY `complain_date` DESC";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>Customer Name</th>
            <th>Subject</th>
            <th> Details</th>
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
            echo("<td><a href='displayComplainDetails.php?complain_id=$id'>Check Details</a></td>");
            echo("<td>{$row['complain_date']}</td>");

           
            
            
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
