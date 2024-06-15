<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPark</title>
    <link rel="icon" type="image/x-icon" href="./css/images/favicon.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<!-- header section starts -->
<section class="header">
    <!--Logo-->
    <img src="./css/images/logo.png" id="logoimg">
    <!--navigation bar-->
    <a href="home.php" class="logo">
        <h3>SmartPark</h3>
        Automated online parking system <br>
        Park Smarter
    </a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="./about.php">About Us</a>
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

<!-- home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(../reservation/images/10.jpg) no-repeat">
                <div class="content">
                    <span>anytime, efficient, stress-free, automated.</span>
                    <h3>Effortlessly park with the click of a button.</h3> 
                    <a href="./about.php" class="btn">discover mode</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(../reservation/images/14.jpg) no-repeat">
                <div class="content">
                    <span>anytime, efficient, stress-free, automated.</span>
                    <h3>Your parking spot, just a tap away.</h3> 
                    <a href="about.php" class="btn">discover mode</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(../reservation/images/13.jpg) no-repeat">
                <div class="content">
                    <span>anytime, efficient, stress-free, automated.</span>
                    <h3>Let technology handle the parking hassle while you focus on the journey</h3> 
                    <a href="about.php" class="btn">discover mode</a>
                </div>
            </div>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!-- services section start -->
<section class="services">

    <h1 class="heading-title"> our services </h1>
    <div class="box-container">       
        <div class="box">
            <h3>Effortless Reservation and Booking</h3>
        </div>

        <div class="box">
            <h3>Real-Time Availability</h3>
        </div>

        <div class="box">
            <h3>Secure Payment Integration</h3>
        </div>

        <div class="box">
            <h3>Easy Reservation Modifications</h3>
        </div>

        <div class="box">
            <h3>Notifications and Alerts</h3>
        </div>

        <div class="box">
            <h3>Expert Customer Support</h3>
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="./css/images/about1.jpg" alt="a car parking in a parking spot"/>
    </div> 
    
     <div class="content">
        <h3>about us</h3>
        <p>At SmartPark, we're revolutionizing the way people park. With a mission to simplify urban mobility, we've developed an innovative automated 
online parking system that redefines convenience and efficiency. Gone are the days of endlessly circling the block in search of parking. Our platform 
empowers users to find, reserve, and pay for parking seamlessly, all from the comfort of their device.
<br><br>Driven by a commitment to enhancing the urban parking experience, SmartPark leverages cutting-edge technology to provide real-time updates on 
parking availability, ensuring users always have access to a spot when they need it. Our secure payment system offers peace of mind, while our dedicated 
customer support team is on standby to assist with any inquiries or issues.
</br>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>
<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title"> Reserve Your Space </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./css/images/search_spot.png" alt="searching parking spot">
            </div>
            <div class="content">
                <h3>Time-saving</h3>
                <p>quickly locate and secure parking spots online saves customers time, allowing them to reach their destinations more efficiently without delays or frustration.</p>
                <a href="../reservation/reservation.php" class="btn"> reserve now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./css/images/Parking_signs.png" alt="parking spot with signs">
            </div>
            <div class="content">
                <h3>Secure Parking</h3>
                <p>Our meticulously designed parking signs serve as your trusty navigators, guiding you effortlessly to your designated spot and ensuring a smooth exit when it's time to depart. 
                Say goodbye to parking headaches and hello to hassle-free parking, courtesy of our user-friendly signs.
                </p>
                <a href="../reservation/reservation.php" class="btn"> reserve now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./css/images/Parking.png" alt="a car exit form parking spot">
            </div>
            <div class="content">
                <h3>Flexibile parking</h3>
                <p>we offer flexibility in terms of parking duration, payment options, and the ability to modify or cancel reservations as needed.</p>
                <a href="../reservation/reservation.php" class="btn"> reserve now </a>
            </div>
        </div>
    </div>

    <div class="load-more">
        <a href="../reservation/reservation.php" class="btn"> Reserve your parking </a>
    </div>

</section>


<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>Upto 25% off</h3>
        <p>At SmartPark, we're committed to making parking hassle-free and affordable for everyone. Take advantage of this special offer today and discover the convenience of automated online parking. Don't miss out—book now and park smarter with SmartPark!</p>
        <a href="../registration/login.php" class="btn">reserve now</a>
    </div>
</section>

<!-- home offer section ends -->

<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="../contactus/contact.php"><i class="fas fa-angle-right"></i>Contact Us</a>
            <a href="../reservation/reservation.php"><i class="fas fa-angle-right"></i>Reservation</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about us </a>
            <a href="../contactus/privacy.php"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="../registration/Terms-and-conditions.html"><i class="fas fa-angle-right"></i> terms and conditions</a>
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