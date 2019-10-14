<link rel="stylesheet" href="styles/style.css">
<html>
    <head>
        <?php
            include('database/users.php');
            include('validate.php');
        ?>
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
                    <h1 class="login_title">Register</h1>
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

<?php
    if (isset($_POST['reg_user'])) {
        if ($_POST['pass'] !== $_POST['pass-repeat']) {
            echo "<script>alert('Passwords don't match');</script>";
            return ;
        }
        if (!valid_number($_POST['number'])) {
            echo "<script>alert('Wrong phone format');</script>";
            return ;
        }
        // add user
        user_add($_POST['username'],$_POST['name'],$_POST['surname'],$_POST['address'],$_POST['number'],$_POST['email'],hash("sha1",$_POST['pass']));
        // session_start();
        // $_SESSION['user'] = $_POST['username'];
        header('location: index.php');
    }
?>