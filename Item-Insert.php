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
    
        <!-- wrap start -->
        <div class="wrap">
            <div id="register">
                <form action="register.php" method="post">
                <div class="container">
                    <h1 class="login_title">Item Insert</h1>
                    <p class="t_text">Please fill in this form to create an account.</p>
                    <hr>

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" maxlength="50" required>

                    <label for="surname"><b>Surname</b></label>
                    <input type="text" placeholder="Enter Surname" name="surname" maxlength="50" required>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" maxlength="50" required>

                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter Email" name="address" maxlength="50" required>

                    <label for="number"><b>Number</b></label>
                    <input type="text" placeholder="Enter Phone number" name="number" maxlength="10" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" maxlength="50" required>

                    <label for="pass"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" maxlength="50" required>

                    <label for="pass-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="pass-repeat" maxlength="50" required>
                    <hr>

                    <button type="submit" class="registerbtn" name="reg_user" value="reg">Register</button>
                    </div>
                
                    <div class="container signin">
                    <p class="b_text">Already have an account? <a href="login.php">Log-In</a>.</p>
                </div>
                </form>
            </div>
        </div>
        <!-- wrap end -->
    </body>
</html>