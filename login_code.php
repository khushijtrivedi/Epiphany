<?php
include "connection.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user_name=$_POST["username"];
    $user_pass=$_POST["password"];
    
    $query="select * from `userinfotb` where `username`='$user_name' and `password`='$user_pass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)===1)
    {
        $row=mysqli_fetch_assoc($result);
        if($row['username']==='admin' && $row['password']==='admin')
        {
            header("Location:category.php");
        }
        elseif($row['username']===$user_name && $row['password']===$user_pass)
        {
            $_SESSION['user'] = $row['username'];
            header("Location:shopping.php");
        }
    }
    else
    {
        header("Location:login.php");
    }
}


?>