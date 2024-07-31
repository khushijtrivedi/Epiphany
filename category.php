<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="category.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        include "category_insert.php";
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
                    <div class="login-page">
                        <div class="form">
                            <form class="login-form" method="post">
                                <input name="catname" type="text" placeholder="category name"/>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
				</main>

				<section>
                    <table border="1">
                        <tr>
                            <td>Category ID</td>
                            <td>Category Name</td>
                            <td>Delete</td>
                        </tr>
					
                        <?php
                            include "connection.php";

                            $query="select * from `categorytb`";
                            $result=mysqli_query($conn,$query);
                            $num = mysqli_num_rows($result);

                            if(isset($_GET['catid']))
                            {
                                $cat_idd = $_GET['catid'];
                                $delete = mysqli_query($conn,"DELETE FROM `categorytb` WHERE `categorytb`.`catid` = $cat_idd");
                            }

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                    <td>".$row['catid']."</td>
                                    <td>".$row['catname']."</td>
                                    <td> <a href='category.php?catid=".$row['catid']."' class='btn'>Delete</a> </td>
                                </tr>
                                ";
                            } 
                        
                        ?>
                    </table>
                    <div class="login-page">
                        <div class="form">
                            <form class="login-form" method="post">
                                <input name="ccid" type="text" placeholder="category id"/>
                                <input name="cname" type="text" placeholder="category name"/>
                                <input type="submit" value="submit" name="update_cat">
                            </form>
                        </div>
                    </div>
				</section>

				<!-- <footer> 
                    <div class="footer-content">
                        <h3>NAIVE DEVELOPER @139_TRIVEDI</h3>
                    </div> 
				</footer> -->

			</div>	
		</div>

    </body>
</html>