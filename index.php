<?php
    session_start();
?>

<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <title>
            Home Page
        </title>
    </head>
    <body class="background" style="min-width: 1000px;">
    <!-- nav bar start -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
        <?php if (isset($_SESSION['user_id'])) {echo "<li><a href=\"logged_users.php\">".$_SESSION['user_id']."</a></li>";}else{echo "<li><a href=\"login.php\">Sign-in</a></li>";}?>
        <li><a href="cart.php"><img style="width: 50px; height: 50px;"src="images/basket.png">Cart</a></li>
        <li><a href="admin.php">AdminTest</a></li>
    </ul>
    <!-- nar bar end -->

    <!-- icons bar end -->
    <div class="wrapper">
        <div class="left">
        <img style="width: 1100px; height: 1000px;" src = "https://images2.alphacoders.com/246/246622.jpg">
        </div>
        <div class="right">
            <div class="h1_page">
             <ul>
                  <li id="h_button"><a href="store.php">Store</a></li>
               </ul>
            </div>
            <div class="h2_page">
             <ul>
                <li id="h_button"><a href="login.php">Log-In</a></li>
            </ul>
            </div>    
        </div>        
    </div>
    <!-- icons bar end -->
    </body>
</html>