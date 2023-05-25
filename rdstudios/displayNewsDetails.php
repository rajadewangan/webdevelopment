<?php
@session_start();

require_once("header.php");

?>
<div id="container">
    <?php
    $id=$_REQUEST['news_id'];
    require_once("dbconnect.php");
    $sql = "SELECT * FROM `news_info` WHERE news_id=$id";
    $rsNews = mysqli_query($con, $sql) or die("Query Error -1");
    $row = mysqli_fetch_array($rsNews);
    echo("<div id='newsDetails'><h1>{$row['news_name']}</h1>
           <span>{$row['news_publication_date']}</span> </div>
          <p>{$row['news_description']}</p>");

    ?>
    
</div> <!--end of container-->
<?php
require_once("footer.php");
?>
