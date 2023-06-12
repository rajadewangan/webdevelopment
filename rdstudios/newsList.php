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
    $sql = "SELECT * FROM `news_info` WHERE news_publication_date>=now() ORDER BY news_publication_date DESC";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");

   
    ?>
    <table id="displayCartInfoTable">
        <tr>
            <th>S.No.</th>
            <th>News Name</th>
            <th>News Publish Date</th>
            <th>Check News Details</th>
            <th>Status</th>


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
            echo("<td><a href='editNews.php?news_id=$id'>Edit &nbsp;&nbsp;|</a>
            <a href='deleteNews.php?news_id=$id'>Delete</a></td>");
      
            
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
