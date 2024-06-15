<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';
session_start();

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['logged_user'])) {
    $un = $_SESSION['logged_user'];

    $sql = "SELECT * FROM user WHERE Username ='$un'";
    $query_result = $conn->query($sql);

    if ($query_result->num_rows === 1) {
        $row=$query_result->fetch_assoc();
		$name=$row['person_name'];
		$p_username=$row['Username'];
		$phone=$row['Contact_no'];
		$email=$row['Email'];
		$vehicle_type=$row['Vehicle_type'];
		$number_plate=$row['Number_plate'];
    }
}
?>

<!doctype html>
<html>
<head>
<title>User account</title>
<link rel="icon" type="image/x-icon" href="./css/images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
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
    <div class="container">
        <div class="left">
		<button class="logout"><a href="logout.php" class="link"> Logout</a></button>
		<center>
		 <h1 >User Account</h1>
		</center> 
       <img src="images/user.png" class="user">
		<div class="caption">Park with Ease, Arrive with Peace.</div>
		<br><br><br><br><br>
		<form method="post" class="user-info" action="useraccount-update.php" onsubmit="return delete_account(event)">
		<center><h2>User Information</h2></center>
		 <label>Name:</label>
		<input type ="text" size="30"  class="input-field" id="user" value="<?php echo @$name;?>" readonly><br><br>
		<label>User Name:</label>
		<input type ="text" size="30" class="input-field" id="user" name="username" value="<?php echo @$p_username ?>" readonly><br><br>
		<label>Contact Number:</label>
		<input type ="text" size="30"  class="input-field" id="user" value="<?php echo @$phone  ?>"readonly><br><br>
        <label>	Email:</label>
		<input type ="Email" size="30"  class="input-field" id="user" value="<?php echo @$email  ?>" readonly><br><br>
		<label>Vehicle Type:</label>
		<input type ="text" size="30"  class="input-field" id="user" value="<?php echo @$vehicle_type  ?>" readonly><br><br>
		<label>Number plate:</label>
		<input type ="text" size="30"  class="input-field" id="user" value="<?php echo @$number_plate ?>" readonly><br><br>
		<center>
		<input type="submit" value="Delete Account" class="button-signup" name="deleteProfile">
		</center>
		</form>
           
       
	   </div>
        
		<div class="right">
		  <center>
		    <h1>Change Password</h1>
		  </center>
		  <br><br>
		  <form onsubmit="return updatepassword()" method="post" class="change-password" action="useraccount-update.php">
		  <center>
		   <label> User Name:</label><br>
		   <input type ="text"  size="30" class="input-field" required><br><br>
           <label>Current Password:</label><br>
		   <input type="password"  size="30"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="The password must contain a uppercase letter, lowercase letter, number and a symbol" class="input-field" name="password" id="old-psw"  required><br><br>
		   <label>New password:</label><br>
		   <input type="password" size="30"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="The password must contain a uppercase letter, lowercase letter, number and a symbol" class="input-field"  name="new_password" id="forgot-psw" required><br><br>
		   <label>Confirm Password:</label><br>
		   <input type="password"  size="30"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="The password must contain a uppercase letter, lowercase letter, number and a symbol" class="input-field" name="confirmpw" id="confirm-psw" required><br><br>
          <br>
		   <input type="Submit" value="Change Password" class="button-signup" name="updatePW"  >
		  </center>
		  </form>
		</div>
    </div>
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
