<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="user.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        include "user_code.php";
    ?>
    
        <div class="wrapper">
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="admin.php">
                            <span class="item">Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="category.php">
                            <span class="item">Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="product.php">
                            <span class="item">Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <span class="item">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="order.php">
                            <span class="item">Order</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
  
        <div id="rightSideWrapper">
			<header> 
                <h1>
                    epiphany
                </h1>
                <div class="topnav">
                    <a class="active" href="about.html">
                        ABOUT
                    </a>
                    <a href="logout.php">
                        LOGOUT
                    </a>
                    <a href="#">
                        LOGIN
                    </a>
                    <a href="#">
                        HOME
                    </a>
                </div> 
			</header>
			
			<div class="ContentBox">
				<main> 
                <table border="1">
                        <tr>
                            <td>User ID</td>
                            <td>User Name</td>
                            <td>Email</td>
                            <td>Mobile</td>
                            <td>Password</td>
                            <td>Delete</td>
                        </tr>
					
                        <?php
                            include "connection.php";

                            $query="select * from `userinfotb`";
                            $result=mysqli_query($conn,$query);
                            $num = mysqli_num_rows($result);

                            if(isset($_GET['userid']))
                            {
                                $user_idd = $_GET['userid'];
                                $delete = mysqli_query($conn,"DELETE FROM `userinfotb` WHERE `userinfotb`.`userid` = $user_idd");
                            }

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                    <td>".$row['userid']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['mobile']."</td>
                                    <td>".$row['password']."</td>
                                    <td> <a href='user.php?userid=".$row['userid']."' class='btn'>Delete</a> </td>
                                </tr>
                                ";
                            } 
                        
                        ?>
                    </table>
				</main>

				<section>
                    
				</section>

				<footer> 
                    <div class="footer-content">
                        <h3>NAIVE DEVELOPER @139_TRIVEDI</h3>
                    </div> 
				</footer>

			</div>	
		</div>

    </body>
</html>