<?php
    // session_start();

    // if ($_SESSION['user_id']) {
    //     $id = $_SESSION['user_id'];
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
        <li><a href="index.php"><Home</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="login.php"><?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];} else {echo "Sign-in";} ?></a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="admin.php">AdminTest</a></li>
    </ul>
    <!-- nar bar end -->

    <!-- icons bar end -->
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
    <!-- icons bar end -->
    </body>
</html>