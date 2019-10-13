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
            <form action="register.php">
                <div class="container">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" required>

                    <label for="surname"><b>Surname</b></label>
                    <input type="text" placeholder="Enter Surname" name="surname" required>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="pass-repeat" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" required>

                    <hr>

                    <button type="submit" class="registerbtn">Register</button>
                    </div>
                
                    <div class="container signin">
                    <p>Already have an account? <a href="login">Log-In</a>.</p>
                </div>
                </form>
            </div>
        </div>
        <!-- wrap end -->
    </body>
</html>