<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <title>
            Log-in
        </title>
    </head>
    <body class="background">
        <!-- nav bar start -->
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="login.php">Log-In</a></li>
            <li><a href="cart.php" style="float:right; color:#fc7e37;">
			<img src="images/cart.png" style="height:20px; margin: 0 10px;
			padding:0;" alt="cart">My Cart (<?=$_SESSION['total_items'];?>) - R<?=$_SESSION['total_price'];?></a></li>
        </ul>
        <!-- nav bar end -->
    
        <!-- wrap start -->
        <div class="wrapper">
            <div class="cart">
            <h1 style="font-size:60px;">Check out your current order</h1>
	        <p align='center' style='color:#333;'>Your cart is empty now :(</p>
            </div>
        </div>
        <!-- wrap end -->
    </body>
</html>