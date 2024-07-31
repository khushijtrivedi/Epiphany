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
                            <a href='".$row['catname'].".php'>
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
                        <th>PRODUCT REMOVE</th>
                        <th>PURCHASE</th>
                </tr>
                <?php
                    include "connection.php";
                    $query="select * from `carttb`";
                    $result=mysqli_query($conn,$query);

                    if(isset($_GET['prodid']))
                    {
                        $prod_idd = $_GET['prodid'];
                        $add_to_cart = mysqli_query($conn,"delete from carttb WHERE `carttb`.`prodid` = $prod_idd");
                    }

                    // if(isset($_GET['catid']))
                    // {
                    //     $cat_idd = $_GET['catid'];
                    //     $add_to_cart = mysqli_query($conn,"insert into ordertb(prodid,prodname,prodprice,prodcat) SELECT prodid,prodname,prodprice,prodcat from carttb WHERE `producttb`.`prodid` = $caat_idd");
                    // }

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo"
                        <tr>
                        <td>".$row['prodname']."</td>
                        <td>".$row['prodprice']."</td>
                        <td> <a href='cart.php?prodid=".$row['prodid']."' class='btn'>REMOVE FROM CART</a> </td>
                        <td> <a href='cart.php?product=".$row['prodname']."' class='btn'>PURCHASE</a> </td>
                        </tr>
                        ";
                    }

                ?>
                </table>

                <?php
                    if(isset($_GET['product']))
                    {
                        $pidd = $_GET['product'];
                        $query_d = mysqli_query($conn,"select * from carttb where prodname='$pidd'");

                        while($row=mysqli_fetch_assoc($query_d))
                    {
                        
                ?>

                    <div class="login-page">
                        <div class="form">
                            <form name='login-form' method='POST'>
                                <input type="text" name="name" placeholder=<?php echo $row['prodname']?>>
                                <input type="text" name="price" placeholder=<?php echo $row['prodprice']?>>
                                <input type="number" name="qty" placeholder="enter quantity">
                                <input type="text" name="address" placeholder="address">
                                <input type="submit" name="purchase" value="purchase">
                            </form>
                        </div>
                    </div>
                <?php
                    }
                    }
                ?>
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