<link rel="stylesheet" href="styles/style.css">
<style>
    .login_title{
        margin-top: 50px;
        margin-bottom: 50px;
        font-size: 75px;
    }
    input[type=text], input[type=password] {
        border-radius: 14px;
        padding: 30px;
        width: 350px;
        height: 10px;
    }
    .login_reg {
        margin-top: 25px;
        margin-bottom: 25px;
        font-size: 40px;
    }
    .submit_button {

    }
</style>
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
            <div>
                <h1 class="login_title">Sign in.</h1>
            </div>
            <div class="login_form">
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
            <div class="login_reg">
                <h1>No account? register here.</h1>
            </div>
        </div>
         <!-- Login form end -->
    </body>
</html>