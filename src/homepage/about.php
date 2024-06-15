<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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
<div class="heading" style="background:url(../reservation/images/1.jpg) no-repeat">
    <h1>about us</h1>
</div>

<!-- about section starts -->

<section class="about">
    <div class="image">
        <img src="../reservation/images/11.jpg" alt="a photo of a family">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Welcome to SmartPark Pro, your trusted partner in automated parking solutions. Our goal is to transform the way you park, making it a hassle-free and enjoyable experience. We understand the complexities of parking in crowded cityscapes and the need for efficient space management. Our cutting-edge automated parking system is designed to tackle these challenges head-on, offering a smooth parking experience for all our users</p>
        <p>Choose SmartPark Pro for a smarter, safer, and more efficient parking experience. We’re not just about parking, we’re about peace of mind.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>Anytime Parking</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 service</span>
            </div>
        </div>
    </div>
</section>
<!-- about section ends -->

<!-- reviews section starts -->

<section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>I was skeptical at first, but SmartPark Pro has won me over. The safety features are impressive, and I love that it’s eco-friendly.</p>
                    <h3>jonan kennedy</h3>
                </div>
            </div>
            

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>SmartPark Pro has completely changed my parking experience. It’s efficient and easy to use. No more stress about finding a parking spot!</p>
                    <h3>kiara hampson</h3>
                </div>
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>SmartPark Pro is a game-changer. It’s convenient and saves so much time. Highly recommended!</p>
                    <h3>paul hudson</h3>
                </div>
            </div>
             

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>SmartPark Pro is all about efficiency and convenience. It’s made parking a breeze. Great job!</p>
                    <h3>lorie carl & perk cartson</h3>
                </div>
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>I’ve been using SmartPark Pro for a few months now, and it’s been a smooth ride. The system is innovative and reliable. Thumbs up!</p>
                    <h3>jinny jordan</h3>
                </div>
            </div>
             
        </div>
    </div>
</section>
<!-- reviews section ends -->


<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="../contactus/contact.php"><i class="fas fa-angle-right"></i>Contact Us</a>
            <a href="../reservation/reservation.php"><i class="fas fa-angle-right"></i>Reservation</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us </a>
            <a href="../contactus/privacy.php"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="../registration/Terms-and-conditions.html"><i class="fas fa-angle-right"></i> terms and conditions</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"><i class="fas fa-envelope"></i> manu@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> colombo, SriLanka </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
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