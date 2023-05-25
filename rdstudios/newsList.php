<?php
@session_start();

require_once("header.php");

?>
<div id="container">
    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `news_info` WHERE news_publication_date>=now()";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>News Name</th>
            <th>News Publish Date</th>
            <th>Check News Details</th>

        </tr>
        <?php
        $cnt = 0;
        while ($row = mysqli_fetch_array($rsNews)) {
            $id=$row['news_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['news_name']}</td>");
            echo("<td>{$row['news_publication_date']}</td>");

           
            echo("<td><a href='displayNewsDetails.php?news_id=$id'>Check Details</a></td>");
            
            echo("</tr>");
        }
       
        ?>
    </table>
</div> <!--end of container-->
<?php
require_once("footer.php");
?>
