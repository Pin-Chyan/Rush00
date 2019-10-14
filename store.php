<?php
session_start();
include "./databse/store_func.php";
?>
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
            <li><a href="cart.php" style="float:right; color:#white;">
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
                <div class="navcat">
                <a href="store.php?cat=Romantic">Romantic</a>
                <a href="store.php?cat=Comedy">Comedy</a>
                <a href="store.php?cat=Adventure">Adventure</a>
                <a href="store.php?cat=Action">Action</a>
                <a href="store.php?cat=Fantasy">Fantasy</a>
                <a href="store.php?cat=Isekai">Isekai</a>
                <a href="store.php?cat=Anime">Anime</a>
                <a href="store.php?cat=Manga">Manga</a>
                <a href="store.php" style="margin-top: 250px;"><b>RESET FILTER</b></a>
                </div>
            </div>
            <div class="s_right" text-align:"right">
                <div class="wrapper">
                    <h1 class="h_title">Products</h1>
                    <div class="left_p">
                        <a href="store.php" onclick="return add_cart('Toradora');">ToraDora</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">Vinland saga</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">How not to summon a demon lord</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">Beyond the boundary</a>
                    </div>
                    <div class="right_p">
                        <a href="store.php" onclick="return add_cart('Toradora');">Violet Evergarden</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">Shield Hero</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">Konosuba</a>
                        <a href="store.php" onclick="return add_cart('Toradora');">Kimetsu no Yaiba</a>
                    </div>
                </div>
                    
                    <?php
                    if (!$cat && !$orig) {
                        $products = db_get_products();
                        foreach($products as $item) {
                            include("item.php");
                        }
                    }
                    else if ($cat) {
                        $products = db_get_products_cat($cat);
                        foreach($products as $item) {
                            include("item.php");
                        }
                    }
                    else if ($orig) {
                        $products = db_get_products_orig($orig);
                        foreach($products as $item) {
                            include("item.php");
                        }
                    }
                    ?>
              </div>    
            </div>        
        </div>
        <!-- wrap end -->
    </body>
</html>