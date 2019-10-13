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
        <li><a href="#home">Cart</a></li>
        <li><a href="login.php">Log-In</a></li>
        <li><a href="#home">DONATE</a></li>
    </ul>
        <!-- nav bar end -->

        <!-- Login form start -->
        <div class="log_in">
        <h1 style="font-size: 50px">Sign in.</h1>
        <form method="post" action="login.php">
            <table>
                <tr>
                    <td><b>Username:</b></td>
                    <td><input type="text" name="login" placeholder="enter username" required/></td>
                </tr>
                <tr>
                    <td><b>Email:</b>
                    <td><input type="password" name="pass" placeholder="enter password" required/></td>
                </tr>
            </table>
          </form> 
          <!-- Login form end -->
        </div>
    </body>
</html>