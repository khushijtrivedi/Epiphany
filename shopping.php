<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="shop.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
        <div class="wrapper">
            <div class="sidebar">
                <ul>
                <?php
                    include "connection.php";
                    session_start();
                    $query="select * from `categorytb`";
                    $result=mysqli_query($conn,$query);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo"
                        <li>
                        <a href='Pie.php' class='btn'> 
                                <span class='item'>".$row['catname']."</span>
                            </a>
                        </li>
                        ";
                    }
                ?>
                </ul>
            </div>
        </div>
  
        <div id="rightSideWrapper">
			<header> 
                <h1>
                    epiphany
                </h1>
                
                <div class="topnav">
                    <a>
                    <?php 
                echo  $_SESSION['user']; 
                ?>
                    </a>
                    <a class="active" href="about.html">
                        ABOUT
                    </a>
                    <a href="logout.php">
                        LOGOUT
                    </a>
                    <a href="cart.php">
                        CART
                    </a>
                    <a href="login.php">
                        LOGIN
                    </a>
                    <a href="homepage.html">
                        HOME
                    </a>
                </div> 
			</header>
			
			<div class="ContentBox">
				<main> 
				</main>

				<section>
                <?php
                    if(isset($_GET['catid']))
                    {
                        $cat_idd = $_GET['catid'];
                        $dis = mysqli_query($conn,"SELECT * FROM `producttb` where categoryname = '$cat_idd'");
                        while($roww=mysqli_fetch_assoc($dis))
                        {
                            echo"
                            <div>
                            <p>".$roww['prodname']."</p>
                            <img src='".$roww['prodimage']."'>
                            <p>".$roww['prodprice']."</p>
                            <a href='shopping.php?prodid=".$row['prodid']."' class='btn'>ADD TO CART</a> 
                            </div>
                            ";
                        }
                        if(isset($_GET['prodid']))
                    {
                        $prod_idd = $_GET['prodid'];
                        $add_to_cart = mysqli_query($conn,"insert into carttb(prodid,prodname,prodprice,prodcat) SELECT prodid,prodname,prodprice,categoryname from producttb WHERE `producttb`.`prodid` = $prod_idd");
                    }
                    }
                    
                    
                ?>
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