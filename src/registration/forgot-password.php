<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';
?>
<!doctype html>
<html>
<head>
<title>Forgot Password</title>
<link rel="icon" type="image/x-icon" href="./css/images/favicon.ico">
<script src="script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="../homepage/css/style.css">
    <script src="../homepage/js/script.js"></script>
</head>
<body>
<!-- header section starts -->
<section class="header">
    <!--Logo-->
    <img src="../homepage/css/images/logo.png" id="logoimg">
    <!--navigation bar-->
    <a href="../homepage/home.php" class="logo">
        <h3>SmartPark</h3>
        Automated online parking system <br>
        Park Smarter
    </a>

    <nav class="navbar">
        <a href="../homepage/home.php">Home</a>
        <a href="../homepage/about.php">About Us</a>
        <a href="../contactus/contact.php">Contact Us</a>
        <a href="../reservation/reservation.php">Reservation</a>
    <div>
        <a href="../admin/question.php"><button id="loginBtn" class="loginBtn">Login</button></a>
        <a href="../registration/sign-up.php" ><button id="signupBtn" class="signupBtn">Signup</button></a>
    </div>
        <!--Javascript code to connect login and signup buttons with their respective web pages-->
        <script src="script.js"></script>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<br><br>
<center>
<!--start of form-->
<form action="forgot-password-update.php" method="post" onsubmit="return forgotpassword()">
<h1 align="center">Forgot Password</h1>
<br>
<div class="input-icons">
    <i class="fa fa-user icon"></i>
    <input type ="text" placeholder="Username" size="30" name="username" class="input-field" required>
    <br><br>
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="New Password" size="30" name="new_password" class="input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" id="forgot-psw" title="The password must contain a uppercase letter, lowercase letter, number and a symbol" required>
    <br><br>
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Confirm Password" size="30" name="confirmpw"class="input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" id="confirm-psw" required>
    <br><br>
</div>
<input type="submit" value="Change password" name="changePW" class="button">
</form>
<!--End of form-->
</center>
<br><br>
<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="../homepage/home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="../homepage/about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="../contactus/contact.php"><i class="fas fa-angle-right"></i>Contact Us</a>
            <a href="../reservation/reservation.php"><i class="fas fa-angle-right"></i>Reservation</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="../homepage/about.php"><i class="fas fa-angle-right"></i> about us </a>
            <a href="../contactus/privacy.php"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="./Terms-and-conditions.html"><i class="fas fa-angle-right"></i> terms and conditions</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +94 76 159 8549 </a>
            <a href="#"><i class="fas fa-envelope"></i> thushaammu30@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> colombo, SriLanka </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="https://web.facebook.com/"><i class="fab fa-facebook"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> GooglePlus </a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"><span>SmartPark.Pro</span> |all rights reserved!</div>
</section>

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="./js/script.js"></script>
</body>
</html>
