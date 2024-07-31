<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST["captcha"] != $_SESSION["captcha"] && $_SESSION["captcha"]=='')
    {
        $user_name=$_POST["username"];
        $user_pass=$_POST["password"];
        $user_email=$_POST["email"];
        $user_mobile=$_POST["mobile"];
        
        $query="INSERT INTO `userinfotb` (`userid`, `username`, `email`, `password`, `mobile`) VALUES (NULL, '$user_name', '$user_email', '$user_pass', '$user_mobile')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
                header("Location:login.php");
        }
        else{
            header("Location:home.php");

        }
    }
    
    else
    {
        echo '<script>alert("please fill the form carefully")</script>';
    }
}

?>