<?php
    require('database/users.php');
    session_start();
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
        <?php if (isset($_SESSION['user_id'])) {echo "<li><a href=\"logged_users.php\">".$_SESSION['user_id']."</a></li>";}else{echo "<li><a href=\"login.php\">Sign-in</a></li>";}?>
        <li><a href="cart.php" style="float:right; color:white;">
			<img src="images/cart.png" style="height:20px; margin: 0 10px;
			padding:0;" alt="cart">My Cart (<?=$_SESSION['total_items'];?>) - R<?=$_SESSION['total_price'];?></a></li>
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

                    <button type="submit" name="login" class="registerbtn">Sign in</button>
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

<?php
    if (isset($_SESSION['user_id'])) {
        header('location: index.php');
    }

    if (isset($_POST['login'])) {
        $pw = $_POST['pass'];
        $usr = $_POST['username'];

        if (if_registered($usr) and user_pass($usr, hash("sha1", $pw))) {
            $_SESSION['user_id'] = $usr;
            header('location: index.php');
        }
    }
?>