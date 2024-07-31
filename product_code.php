<?php
include "connection.php";
if(isset($_POST["submit"]))
{

    $product_name=$_POST["prodname"];
    $product_price=$_POST["prodprice"];
    $product_image=$_POST["fileToUpload"];
    $category_name=$_POST["catename"];
    
    $query="INSERT INTO `producttb`(`prodname`, `prodprice`, `prodimage`, `prodid`, `categoryname`) VALUES ('$product_name','$product_price','$product_image',NULL,'$category_name')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header("Location:product.php");
    }
    else
    {
        echo '<script> alert("error")</script>';
    }
}

if(isset($_POST['update_p']))
{
    $prod_id = $_POST["ppid"];
    $prod_name=$_POST["pname"];
    $prod_price=$_POST["pprice"];
    $prod_image=$_POST["ftou"];
    $cate_name=$_POST["caname"];

    $query_p= mysqli_query($conn,"UPDATE `producttb` SET `prodname`='$prod_name',`prodprice`='$prod_price',`prodimage`='$prod_image',`categoryname`='$cate_name' WHERE prodid = $prod_id");

}

?>