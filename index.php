<?php
	session_start();
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
		$_SESSION['total_items'] = 0;
        $_SESSION['total_price'] = '0.00';
        include("cart_func.php");
	}
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
        <li><a href="cart.php" style="float:right; color:white;">
			<img src="images/cart.png" style="height:20px; margin: 0 10px;
			padding:0;" alt="cart">My Cart (<?=$_SESSION['total_items'];?>) - R<?=$_SESSION['total_price'];?></a></li>
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
        </div>        
    </div>
    <!-- icons bar end -->
    </body>
</html>