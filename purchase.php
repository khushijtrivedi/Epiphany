<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="purchase.css">
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
                            <a href='Pie.php'>
                                <span class='item'>".$row['catname']."</span>
                            </a>
                        </li>
                        ";
                        $_SESSION['category']=$row['catname'];
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
                <div class="login-page">
                        <div class="form">
                            <form class="login-form" method="post">
                                <input name="prodname" type="text" placeholder=<?php echo $_SESSION["pname"]?>>
                                <input name="prodprice" type="text" placeholder=<?php echo $_SESSION["pprice"]?>>
                                <input name="qty" type="number">
                                <select name="city">
                                    <option name="city" value="select">select city for address</option>
                                    <option name="city" value="gujarat">gujarat</option>
                                    <option name="city" value="delhi">delhi</option>
                                    <option name="city" value="kerala">kerala</option>
                                    <option name="city" value="maharashtra">maharashtra</option>
                                    <option name="city" value="manipur">manipur</option>
                                </select>
                                <input type="submit" value="submit">
                            </form>
                            
                        </div>
                    </div>
				</main>

				<!-- <section>
                </section>

				<footer> 
                    <div class="footer-content">
                        <h3>NAIVE DEVELOPER @139_TRIVEDI</h3>
                    </div> 
				</footer> -->

			</div>	
		</div>

    </body>
</html>