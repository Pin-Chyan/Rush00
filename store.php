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
                <a href="index.php?view=store&cat=Romantic">Romantic</a>
                <a href="&cat=Comedy">Comedy</a>
                <a href="&cat=Adventure">Adventure</a>
                <a href="&cat=Action">Action</a>
                <a href="&cat=Fantasy">Fantasy</a>
                <a href="&cat=Isekai">Isekai</a>
                <a href="&cat=Anime">Anime</a>
                <a href="&cat=Manga">Manga</a>
                <a href="#" style="margin-top: 250px;"><b>RESET FILTER</b></a>
                </div>
            </div>
            <div class="s_right">
                    <h1 class="h_title">Products</h1>
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