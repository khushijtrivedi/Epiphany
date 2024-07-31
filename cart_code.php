<?php

session_start();
include "connection.php";
if(isset($_POST['purchase']))
{
    $name_order=$_POST['name'];
    $price_order=$_POST['price'];
    $quantity_order=$_POST['qty'];
    $address_order=$_POST['address'];
    $use=$_SESSION['user'];

    $query= "INSERT INTO `ordertb`(`orderid`, `username`, `prodname`, `quantity`, `price`) VALUES (NULL,'$use','$name_order','$quantity_order','$price_order')";
    $result=mysqli_query($conn,$query);
  
}

?>