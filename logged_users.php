<link rel="stylesheet" href="styles/style.css">
<?php
    session_start();
    include('database/users.php');
    include('database/norm_users.php');
?>
<html>
    <head>
        <title>
            User Profile3
        </title>
    </head>
    <body class="background">
        <!-- nav bar start -->
        <ul>
            <!-- <li><a href="index.php"><img class="h_image" src="images/logo.png"></a></li> -->
            <li><a href="index.php">Home</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="login.php"><?php if (isset($_SESSION['user_id'])) {echo $_SESSION['user_id'];} else {echo "Sign-in";} ?></a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
        <!-- nar bar end -->

        <!-- wrap start -->
        <div class="l_wrapper">
            <div class="l_left">
            <img style="width: 1100px; height: 1000px;" src = "https://images2.alphacoders.com/246/246622.jpg">
            </div>
            <div class="l_center">
                <h1 class="h_title">User Profile</h1>
                <?php
                    get_specfic("<tag>","users","username","</tag><br >", $_SESSION['user_id']);
                    get_specfic("<tag>","users","name","</tag><br >", $_SESSION['user_id']);
                    get_specfic("<tag>","users","surname","</tag><br >", $_SESSION['user_id']);
                    get_specfic("<tag>","users","email","</tag><br >", $_SESSION['user_id']);
                ?>
                <button type="submit" class="registerbtn" name="reg_user" value="reg"><a href="logout_user.php">Log-Out :(</a></button>
            </div>
        </div>
    </body>
</html>