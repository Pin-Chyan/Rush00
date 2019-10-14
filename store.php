<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <title>
            Home Page
        </title>
    </head>
    <body class="background">
        <!-- nav bar start -->
        <ul>
            <!-- <li><a href="index.php"><img class="h_image" src="images/logo.png"></a></li> -->
            <li><a href="index.php">Home</a></li>
            <li><a href="store.php">Store</a></li>
            <?php if (isset($_SESSION['user_id'])) {echo "<li><a href=\"logged_users.php\">".$_SESSION['user_id']."</a></li>";}else{echo "<li><a href=\"login.php\">Sign-in</a></li>";}?>
            <li><a href="cart.php" style="float:right; color:#fc7e37;">
			<img src="images/cart.png" style="height:20px; margin: 0 10px;
			padding:0;" alt="cart">My Cart (<?=$_SESSION['total_items'];?>) - R<?=$_SESSION['total_price'];?></a></li>
        </ul>
        <!-- nar bar end -->

        <!-- wrap start -->
        <div class="s_wrapper">
            <div class="s_left">
            </div>
            <div class="s_center">
                <h1 class="h_title">Category</h1>
            </div>
            <div class="s_right">
                    <h1 class="h_title">Products</h1>
              </div>    
            </div>        
        </div>
        <!-- wrap end -->
    </body>
</html>