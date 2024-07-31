<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="Pie.css">
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
                <table>
                    <tr>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT PRICE</th>
                        <th>PRODUCT ADD</th>
                </tr>
                <?php
                    include "connection.php";
                    $query="select * from `producttb`";
                    $result=mysqli_query($conn,$query);

                    if(isset($_GET['prodid']))
                    {
                        $prod_idd = $_GET['prodid'];
                        $add_to_cart = mysqli_query($conn,"insert into carttb(prodid,prodname,prodprice,prodcat) SELECT prodid,prodname,prodprice,categoryname from producttb WHERE `producttb`.`prodid` = $prod_idd");
                    }

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo"
                        <tr>
                        <td>".$row['prodname']."</td>
                        <td>".$row['prodprice']."</td>
                        <td id='display-image'> <img src='".$row['prodimage']."'> </td>
                                    <td> <a href='Pie.php?prodid=".$row['prodid']."' class='btn'>ADD TO CART</a> </td>
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