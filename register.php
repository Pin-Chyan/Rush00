<link rel="stylesheet" href="styles/style.css">

<style>

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color:  white;
  text-align: center;
}



    #register {
        position: relative;
        float: right;
        margin-right: 150px;
        opacity: 0.4;
        width: 1000px;
        height: 1238px;
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
                    <p>Already have an account? <a href="#">Sign in</a>.</p>
                </div>
                </form>
            </div>
        </div>
        <!-- wrap end -->
    </body>
</html>