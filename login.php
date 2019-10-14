<?php
    include("start_session.php");
?>

<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <title>
            log-in
        </title>
    </head>
    <body class="background">

        <!-- nav bar start -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="login.php">Log-In</a></li>
        <li><a href="cart.php">Cart</a></li>
    </ul>
        <!-- nav bar end -->

        <!-- Login form start -->
        <div class="wrap">
            <div id="register">
            <form action="login.php" method="post">
                <div class="container">
                    <h1 class="login_title">Sign-In</h1>
                    <p class="t_text">Please fill in this form to create an account.</p>
                    <hr>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" maxlength="50" required>

                    <label for="pass"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" maxlength="50" required>

                    <hr>

                    <button type="submit" class="registerbtn">Sign in</button>
                    </div>
                
                    <div class="container signin">
                    <p class="b_text">Dont have an account? <a href="register.php">Register</a>.</p>
                </div>
                </form>
            </div>
        </div>
         <!-- Login form end -->
    </body>
</html>