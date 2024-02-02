<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Rhombus Nuts&Bolts |Al-Warsha|Log In</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="lstyle.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
        <body>
           <div id="container">
            <div class="content" id="main">
                <img src="images/lo.png">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Welcome to <br><span>Al-Rhombus Nuts & Bolts</span></h1>
                <p class="par">
                    Because good <span>Driving </span>is everything we need!
                </p>
            </div>
            <div class="loginbox">
                <img src="images/avatar.jpg" class="logo">
                <h4>
                    <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                                
                        echo $_SESSION['loginMessage'];
                    ?>
                </h4>
                    <form action="login_check.php" method="post">
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username or Email"><br>
                        <br>
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Enter Password"><br><br>
                        <button class="btn">log in</button>
                        <br><br>
                        <a href="#">Forgot your password?</a><br><br>
                        <a href="#">Create new account!</a>
                    </form>
            </div>
           </div>

        <footer>
            <p>For more information - follow us on Social Media:</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <p class="end">CopyRight &copy; 2022 By Al-Rhombus Nuts & Bolts | All rights reserved.</p>
        </footer>
        </body>
        
</html>