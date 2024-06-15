<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
    <link rel="stylesheet" href="../homePage/css/style.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/reservation.css">

    <!-- Link to external JavaScript file -->
    <script src="javascript.js"></script>

</head>

<body>

<section class="header">
        <!--Logo-->
        <img src="../homePage/css/images/logo.png" id="logoimg">
        <!--navigation bar-->
        <a href="../homePage/home.php" class="logo">
            <h3>SmartPark</h3>
            Automated online parking system <br>
            Park Smarter
        </a>

        <nav class="navbar">
            <a href="../homePage/home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="../Reservation/reservation.php">Reservation</a>
            <a href="../Reservation/mybookings.php">My Reservations</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(./images/park.jpg)">
    <h1>Reservation</h1>
</div>

<div class="heading2">
    <h3>~ Choose your convenient parking floor ~</h3>
</div>

 <!-- floor selection -->
 <div class="parent-container">
    <div class="packages">
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <a href=floor1.php><img src="./images/psign.jpg" alt=""></a>
                </div>
                <p>Basement Parking space</p>
            </div>

            <div class="box">
                <div class="image">
                <a href=floor2.php><img src="./images/psign2.png" alt=""></a>
                </div>
                <p>First Floor Parking</p>
            </div>

            <div class="box">
                <div class="image">
                    <a href=floor3.php><img src="./images/psign3.png" alt=""></a>
                </div>
                <p>Second Floor Parking</p>
            </div>

            <div class="box">
                <div class="image">
                <a href=floor4.php><img src="./images/psign4.png" alt=""></a>
                </div>    
                <p>Outer Parking</p>
            </div>
        </div>
    </div>
</div>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="booking.php"><i class="fas fa-angle-right"></i>Bookings/Payment</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about us </a>
            <a href="privacypolicy.php"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="terms and conditions.php"><i class="fas fa-angle-right"></i> terms and conditions</a>
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

</body>
</html> 