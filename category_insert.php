<?php
include "connection.php";

if(isset($_POST["submit"]))
{
    $cat_name = $_POST["catname"];

    $query = "INSERT INTO `categorytb` (`catid`, `catname`) VALUES (NULL, '$cat_name')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        header("Location:category.php");
    }

}

if(isset($_POST['update_cat']))
                        {
                            $ccid = $_POST["ccid"];
                            $ccname = $_POST["cname"];
                            $query_u=mysqli_query($conn,"UPDATE `categorytb` SET `catname`='$ccname' WHERE catid = $ccid");
                        }
?>