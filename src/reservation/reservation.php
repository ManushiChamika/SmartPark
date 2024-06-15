<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/reservation.css">
    <link rel="stylesheet" href="../homepage/css/style.css">
    <!-- Link to external JavaScript file -->
    <script src="javascript.js"></script> 
    <script src="../homepage/js/script.js"></script>
</head>

<body>
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

    <section class= reservation-headings>
        <div class="heading_reservation">
            <h1>Reservation</h1>
        </div>

        <div class="heading2">
            <h3>~ Choose your convenient parking floor ~</h3>
        </div>
    <form action="./mybookings.php">
        <button>My Reservations</button>
    </form>
    </section>
    <!-- floor selection -->
    <section class="floor-section">
    <div class="parent-container">
        <div class="packages">
            <form>
            <div class="box-container-floorsection">
                <div class="box">
                    <div class="image">
                        <a href=floor1.php><img src="./images/p_3.png" alt="Basement Parking space"></a>
                    </div>
                    <p>Basement Parking space</p>
                </div>

                <div class="box">
                    <div class="image">
                    <a href=floor2.php><img src="./images/p_1.png" alt="First Floor Parking"></a>
                    </div>
                    <p>First Floor Parking</p>
                </div>

                <div class="box">
                    <div class="image">
                        <a href=floor3.php><img src="./images/p_2.png" alt="Second Floor Parking"></a>
                    </div>
                    <p>Second Floor Parking</p>
                </div>

                <div class="box">
                    <div class="image">
                    <a href=floor4.php><img src="./images/p_4.png" alt="Outer Parking"></a>
                    </div>    
                    <p>Outer Parking</p>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

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
            <a href="../contactus/privacy.php"><i class="fas fa-angle-right"></i>privacy policy</a>
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

</body>
</html> 