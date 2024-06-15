<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
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
<form action="registration.php" method="post" onsubmit="return checkpassword()" >
    <h1 align="center">Sign Up</h1>
    <br>
    <div class="input-icons">
    <i class="fa fa-user icon"></i>
      <input type ="text" placeholder="Name" name="person_name" size="30" class="input-field" required><br><br>
    <i class="fa fa-envelope icon"></i>
      <input type ="email" placeholder="Email" name="email" size="30"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="input-field" required><br><br>
    <i class="fa fa-user-circle icon"></i>
      <input type ="text" placeholder="Username" name="user_name" size="30" class="input-field" required><br><br>
    <i class="fa fa-key icon"></i>
      <input type="password" placeholder="Password" name="user_password"id="psw" size="30"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="The password must contain a uppercase letter, lowercase letter, number and a symbol" class="input-field"  required><br><br>
    <i class="fa fa-key icon"></i>
      <input type="password" placeholder="Confirm Password" name="confirm_password"  id="repsw"size="30"  class="input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br><br>
    <i class="fa fa-phone icon"></i>
      <input type ="text" placeholder="Contact Number" size="30" name="phone" pattern="[0-9]{10}" class="input-field" required><br><br>
    <select class="input-field"  name="vehicle_type">
     <option>Vehicle Type</option>
     <option value="car">Car</option>
     <option value="van">Van</option>
     <option value="Motor bike">Motor-bike</option>
     <option value="three-wheeler">Three-wheeler</option>
     <option value="heavy vehicle">Heavy Vehicle</option>  
     <option value="other">Other</option>
    </select>
    <br><br>
    <i class="fa fa-car icon"></i>
<input type ="text" placeholder="Number Plate" name="number_plate" size="30" class="input-field" required><br><br>
<input type="checkbox"id="checkbox" onclick="enablebutton()" > I agree to the <a href="Terms-and-conditions.html" class="link">Terms and conditions</a><br><br>
<input type ="submit" value="Register" class="button" name="submit_btn" id="submitbtn"  disabled> <br><br>
Already have an account? <a href="login.php" class="link">Login </a>
</div>
</form>
</center>
<br><br>
<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="../homepage/home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="../homepage/about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="../contactus/"><i class="fas fa-angle-right"></i>Contact Us</a>
            <a href="booking.php"><i class="fas fa-angle-right"></i>Reservations</a>
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