<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reservation.css">
    <link rel="stylesheet" href="../homepage/css/style.css">
    <script src="./js/javascript.js"></script>
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
                <button id="loginBtn" class="loginBtn">Login</button>
                <button id="signupBtn" class="signupBtn">Signup</button>
            </div>
            <!--Javascript code to connect login and signup buttons with their respective web pages-->
            <script src="script.js"></script>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <section class="static_parking_space">
     <h2>First Floor Parking</h2>
        <div class="containers">
            <div class="static">
                <div class="static_img">
                    <img src="./images/parking.png" alt="">
                </div>
                <p class="definition">Available Parking slots</p>
            </div>

            <div class="static">
                <div class="static_img">
                    <img src="./images/noparking.png" alt="" >
                </div>
                <p class="definition">Unavailable Parking slots</p>
            </div>
        </div>
    </section>
    
    <section class="parking-slots">
        <div class="box-containers-parkingslots">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "smartparkpro";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT slot_number, is_available FROM first_floor_parking ORDER BY CAST(SUBSTRING(slot_number, 3) AS UNSIGNED)";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $slotNumber = $row["slot_number"];
                    $isParkingAvailable = $row["is_available"];
                    $floor = "First Floor Parking";

                    $imageSrc = ($isParkingAvailable) ? "./images/parking.png" : "./images/noparking.png";
                    $onClick = ($isParkingAvailable) ? "" : " onclick=\"showUnavailableSlotAlert(event)\"";
                    
                    echo '<div class="boxes">';
                    echo '    <div class="images">';
                    echo '        <a href="index.php?floor=' . urlencode($floor) . '&slot=' . urlencode($slotNumber) . '"><img src="' . $imageSrc . '"' . $onClick . ' alt=""></a>';
                    echo '    </div>';
                    echo '    <p>' . $slotNumber . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No parking slot data available.";
            }

            $conn->close();
            ?>
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