<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="product.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        include "product_code.php";
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
                                <input type="text" name="prodname" placeholder="product name"/>
                                <input type="text" name="prodprice"  placeholder="product price"/>
                                <input type="file" name="fileToUpload" id="fileToUpload" />
                                <input type="text" name="catename" placeholder="category name"/>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
				</main>

				<section>
                    <table border="1">
                        <tr>
                            <td>Product ID</td>
                            <td>Product Name</td>
                            <td>Product Price</td>
                            <td>Product Image</td>
                            <td>Category Name</td>
                            <td>Delete</td>
                        </tr>
					
                        <?php
                            include "connection.php";

                            $query="select * from `producttb`";
                            $result=mysqli_query($conn,$query);
                            $num = mysqli_num_rows($result);

                            if(isset($_GET['prodid']))
                            {
                                $prod_idd = $_GET['prodid'];
                                $delete = mysqli_query($conn,"DELETE FROM `producttb` WHERE `producttb`.`prodid` = $prod_idd");
                            }

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                    <td>".$row['prodid']."</td>
                                    <td>".$row['prodname']."</td>
                                    <td>".$row['prodprice']."</td>
                                    <td id='display-image'> <img src='".$row['prodimage']."'> </td>
                                    <td>".$row['categoryname']."</td>
                                    <td> <a href='product.php?prodid=".$row['prodid']."' class='btn'>Delete</a> </td>
                                </tr>
                                ";
                            } 
                        
                        ?>
                    </table>
                    <div class="login-page">
                        <div class="form">
                            <form class="login-form" method="post">
                                <input type="text" name="ppid" placeholder="product id"/>
                                <input type="text" name="pname" placeholder="product name"/>
                                <input type="text" name="pprice"  placeholder="product price"/>
                                <input type="file" name="ftou" id="fileToUpload" />
                                <input type="text" name="caname" placeholder="category name"/>
                                <input type="submit" value="submit" name="update_p">
                            </form>
                        </div>
                    </div>
				</section>


			</div>	
		</div>

    </body>
</html>