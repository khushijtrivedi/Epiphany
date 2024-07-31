<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="registration.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        include "register.php";
    ?>


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
                                <input name="username" type="text" placeholder="username"/>
                                <input name="password" type="password" placeholder="password"/>
                                <input type="email" name="email" placeholder="email"/>
                                <input type="text" name="mobile" placeholder="mobile"/>
                                <input type="text" name="captcha" placeholder="captcha">
                                <div>
                                <img src="reg_captcha.php">
                                </div>
                                <div>
                                <input type="submit" value="submit">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </main>

                <!-- <section>
                </section> -->

                <!-- <footer> 
                    <div class="footer-content">
                        <h3>NAIVE DEVELOPER @139_TRIVEDI</h3>
                    </div> 
                </footer> -->

            </div>	
        </div>
            
    </body>
</html>