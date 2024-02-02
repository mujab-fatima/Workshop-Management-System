<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Forgotten password? | Can't Login</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="fpstyle1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
        <body>
            <header>
                <div class="logo">
                    <img src="images/lo.png" height="150" width="200">
                </div>
            </header>
           <div id="container">
            <div class="loginbox">
                    <form action="fp_b.php" method="post">
                        <h1>
                            <?php
                                error_reporting(0);
                                session_start();
                                session_destroy();

                                echo $_SESSION['loginMessage'];
                            ?>
                        </h1>
                        <h1>Find Your Account</h1>
                        <p>Please enter your email address or mobile number to search for your account.</p>
                        <input type="text" name="email" placeholder="Enter Email address or Mobile number" required="required"><br>
                        <a href="../login/login.php">Cancel</a>
                        <br>
                        <button class="btn">Search</button>
                        <br><br>
                    </form>
            </div>
           </div>

        </body>  
</html>