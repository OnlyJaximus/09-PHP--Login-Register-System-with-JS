<?php

session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js">

    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>


    <!-- <button>Click me</button> -->
    <?php if (isset($_GET['error'])) : ?>
        <div class="alert show">
            <span class="fas fa-exclamation-circle"></span>
            <?php
            $n = $_GET['error'];
            $a = "";
            switch ($n) {
                case "emptyfields":
                    $a = "Fill in all fields!";
                    break;
                case "invalidmailuid":
                    $a = "Invalid username and e-mail!";
                    break;
                case "invalidmail":
                    $a = "Invalid e-mail!";
                    break;
                case "invaliduid":
                    $a = "Invalid username!";
                    break;
                case "passwordcheck":
                    $a = "Your passwords do not match!";
                    break;
                case "usertaken":
                    $a = "Username is already taken!!";
                    break;
                case "wrongpassword":
                    $a = "Your password is wrong!!";
                    break;
            }

            ?>
            <span class="msg"><?php echo $a ?></span>
            <span class="close-btn">
                <span class="fas fa-times"></span>
            </span>
        </div>
    <?php endif; ?>



    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1>MY<span>SITE</span></h1>
            </div>

            <?php if (isset($_SESSION['userId'])) : ?>
                <ul class="navigation">
                    <a href="mainpage.php">
                        <li>Home</li>
                    </a>
                    <a href="#">
                        <li>About</li>
                    </a>
                    <a href="#">
                        <li>Portfolio</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>

                    <a href="includes/logout-submit.php">
                        <li>Logout</li>
                    </a>
                <?php endif; ?>

                <!-- <form action="includes/logout-submit.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form> -->

                </ul>
        </div>
    </div>





    <?php if (!isset($_SESSION['userId'])) : ?>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="img/fb.png" alt="">
                    <img src="img/twiter.png" alt="">
                    <img src="img/insta.png" alt="">
                </div>



                <?php
                // if (isset($_GET['error'])) {
                //     if ($_GET['error'] == "emptyfields") {
                //         echo "<p>Fill in all fields!</p>";
                //     } elseif ($_GET['error'] == "invalidmailuid") {
                //         echo "<p>Invalid username and e-mail!</p>";
                //     } elseif ($_GET['error'] == "invalidmail") {
                //         echo "<p>Invalid e-mail!</p>";
                //     } elseif ($_GET['error'] == "invaliduid") {
                //         echo "<p>Invalid username!</p>";
                //     } elseif ($_GET['error'] == "passwordcheck") {
                //         echo "<p>Your passwords do not match!</p>";
                //     } elseif ($_GET['error'] == "usertaken") {
                //         echo "<p>Username is already taken!!</p>";
                //     } elseif ($_GET['error'] == "wrongpassword") {
                //         echo "<p>Your password is wrong!!</p>";
                //     }
                // }
                // } elseif ($_GET['signup'] == "success") {
                //     echo "<p>Signup successfull!</p>";
                // }
                ?>



                <!-- Logovanje -->
                <form id="login" action="includes/login.inc.php" method="POST" class="input-group">
                    <input type="text" name="mailuid" class="input-field" placeholder="Username/E-mail...">
                    <input type="password" class="input-field" name="password" placeholder="Password...">
                    <input type="checkbox" class="check-box"><span class="sp">Remember Password</span>
                    <button type="submit" class="submit-btn" name="login-submit">Login</button>
                </form>

                <!-- Registracija  -->
                <form id="register" action="includes/signup.inc.php" method="POST" class="input-group">

                    <input class="input-field" type="text" name="uid" placeholder="Username">
                    <input class="input-field" type="text" name="mail" placeholder="Email">

                    <input class="input-field" type="password" name="pwd" placeholder="Password">
                    <input class="input-field" type="password" name="pwd-repeat" placeholder="Repeat password">

                    <input class="check-box" type="checkbox"><span class="sp">I agree to the terms & conditions</span>

                    <button class="submit-btn" type="submit" name="signup-submit">Signup</button>
                </form>





            </div>
        </div>
    <?php endif; ?>