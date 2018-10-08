<?php include "includes/db.php" ?>
<?php include "includes/header.php"  ?>

<link rel="stylesheet" href="css/authenticate.css">
</head>



<body>
<div id="box">
            <div id="main"></div>
            <div id="loginform">
                <form action="includes/login.php" method="post">
                    <h1>LOGIN</h1>
                    <input type="email" name="email" placeholder="Email"/><br>
                    <input type="password" name="password" placeholder="Password"/><br>
                    <button type="submit" name="login">LOGIN</button>
                </form>
            </div>

            <div id="signupform">
                <form action="includes/signup.php" method="post">
                    <h1>SIGN UP </h1>
                    <input type="text" name="name" placeholder="Full Name"/><br>
                    <input type="email" name="email" placeholder="Email"/><br>
                    <input type="password" name="password" placeholder="Password"/><br>
                    <button type="submit" name="signup">SIGN UP</button>
                </form>
            </div>

            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>

            <button id="login_btn"  >LOGIN</button>
            <button id="signup_btn" >SIGN UP</button>


        </div>

        <?php include "includes/footer.php"  ?>