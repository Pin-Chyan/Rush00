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
            <div id="main_login">
            <div>
                <h1 class="login_title">Sign in.</h1>
            </div>
                <form method="post" action="login.php">
                    <table>
                        <tr>
                            <td><input type="text" name="login" placeholder="Username" required/></td>
                        </tr>
                        <tr style="width: 350px; height: 10px;">
                            <td><input type="password" name="pass" placeholder="Password" required/></td>
                        </tr>
                        <tr>
                            <td colspan="8"><input type="submit" name="sign in" value="login" /></td>
                        </tr>
                    </table>
                </form> 
            </div>
        </div>
         <!-- Login form end -->
    </body>
</html>