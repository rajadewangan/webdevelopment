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
    $sql = "SELECT * FROM `category_info` WHERE cat_parent_id='0'";


    $rsItem = mysqli_query($con, $sql) or die("Query Error -1");
    while($row=mysqli_fetch_array($rsItem))
    {
       $id = $row['cat_id'];
       $name = $row['cat_name'];
       $str=$name;
       childCategory($id,$GLOBALS['str'],$con);
    }
    ?>
       
 
    
 
   
    
    
       
       
        
        
   
    
</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div> <!--end of container-->

<?php
function childCategory($id,$str2,$con){
    echo('<table id="displayCartInfoTable"> <tr>' . $str2 . '</tr>
    <tr>

        <th>S.No.</th>
        <th>Categort Name</th>
        <th>Categort Display Name</th>
        <th>Categort Image</th>
        <th>Categort Registration Date</th>


        <th>Status</th>
        

    </tr>');

    $sql = "SELECT * FROM `category_info` WHERE cat_id='$id'";

    $rsItem = mysqli_query($con,$sql);
    if(mysqli_num_rows($rsItem) > 0){
        $cnt = 0;
        while($row = mysqli_fetch_array($rsItem))
        {
            $item_id = $row['cat_id'];
            $cnt++;
            echo("<tr>");
            echo("<td>$cnt</td>");
            echo("<td>{$row['cat_name']}</td>");
            echo("<td>{$row['cat_dname']}</td>");
            $img ="./collection/".$row['image_path'];
            echo("<td><img src='$img' height='100px' width='100px'></td>");
            echo("<td>{$row['reg_date']}</td>");

           
            echo("<td><a href='editCategoryForm.php?category_id=$item_id'>Edit &nbsp;&nbsp;|</a>
            <a href='deleteCategory.php?category_id=$item_id'>Delete</a></td>");

            echo("</tr>  ");

        }
        echo("</table>");
    }
        $sql1 = "SELECT * FROM `category_info` WHERE cat_parent_id='$id'";
        $rsItem = mysqli_query($con, $sql1) or die("Query Error -1");
        if(mysqli_num_rows($rsItem) > 0)
        {
            $r = mysqli_fetch_array($rsItem);
            $str2 .= " -> " . $r['cat_name'];
            $id=$r['cat_id'];
            childCategory($id,$str2,$con);
        }
        else
        {
            return 0;
        }
   
}
require_once("footer.php");
?>
