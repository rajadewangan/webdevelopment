<?php
@session_start();
require_once("header.php");
require_once("dbconnect.php");
?>

<div id="container">
  <div id="login_logout">
  <a href="displayNews.php">News &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
    <a href="loginForm.php">Login &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a>
    <a href="customerForm.php">New User</a>
  </div>

  <div id='categoryContainer'>
    <?php
    if (isset($_REQUEST["cid"]))
        $prid = $_REQUEST['cid'];
    else
        $prid = 0;

    $sql = "SELECT * FROM `category_info` WHERE cat_parent_id=$prid ORDER BY cat_dname";
    $rsCat = mysqli_query($con, $sql) or die("Query Error !");
    while ($row = mysqli_fetch_array($rsCat)) {
        $id = $row['cat_id'];
        $cname = $row['cat_dname'];
        echo("<div class='category'>");
        echo("<a href='index.php?cid=$id'>");
        echo($cname . "<br><br>");
        $img = $row['image_path'];

        echo("<img src='.\\collection\\$img' width='100' height='100' border='1'> ");
        echo("</a>");
        echo("</div>");

    }
    echo ("<div id='itemContainer'>");
    $rsOffer=mysqli_query($con,"select * from offer_info where now()>=offer_start_date and now()<=offer_end_date");
    $arOffers=array();
    $ardis=array();
    while($row=mysqli_fetch_array($rsOffer))
    {
      array_push($arOffers,$row["offer_category_ids"]);
      array_push($ardis,$row["offer_discount"]);
    }
    
    $sql = "SELECT * FROM `item_info` WHERE item_category='$prid'";
    $rsItem = mysqli_query($con, $sql) or die("Query Error");
    
    while ($row = mysqli_fetch_array($rsItem)) {
        $id = $row['item_id'];
        $iname = $row['item_name'];

        echo("<div class='item'>");
        
        echo($iname . "<br><br>");
        $img = $row['item_img'];

        echo("<img src='./collection/$img' width='100px' height='100px' border='1'> ");
        echo("<div>Price : <s>{$row['item_price']}</s>");
        echo(" : {$row['item_discount']}%</div>");
        $rt = $row['item_price'];
        $dis=$row['item_discount'];




        $spdis=0;

              for($i=0;$i<count($arOffers);$i++)
              {
                 $myofferarray= explode("-",$arOffers[$i]);
                 if(in_array($prid,$myofferarray))
                 {
                   $spdis =$spdis + $ardis[$i];
                 }
              }




        $dis=$dis + $spdis;
        $disrate=$rt - $rt * $dis/100;
        echo("Discounted Price : $disrate<br>");
        echo("Details : {$row['item_description']}");

        echo("<a href='checkAlreadyLogin.php?item_id=$id&rate=$disrate'><span>Add to Cart </span><span>+</span></a>");
        echo("</div>");

    }
    echo("</div>");
    ?>
  </div><!--end of categoryContainer-->
</div><!--end of container -->

<?php
require_once("footer.php");
?>
