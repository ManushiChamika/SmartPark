<?php
    include './connect.php';

    if(isset($_COOKIE['User_ID'])){
        $User_ID = $_COOKIE['User_ID'];
    }else{
        setcookie('User_ID', create_unique_id(), time() + 60*60*24*30, '/');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $booking_ID = filter_var($_POST['booking_ID'], FILTER_SANITIZE_STRING);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $cardnumber = filter_var($_POST['cardnumber'], FILTER_SANITIZE_STRING);
        $expmonth = filter_var($_POST['expmonth'], FILTER_SANITIZE_STRING);
        $expyear = filter_var($_POST['expyear'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $CVC_number = filter_var($_POST['CVC_number'], FILTER_SANITIZE_STRING);

        $sql = $conn->prepare("INSERT INTO Payment (booking_ID, name, cardnumber, expmonth, expyear, email, CVC_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql->execute([$booking_ID, $name, $cardnumber, $expmonth, $expyear, $email, $CVC_number]);
    }

    if(isset($_POST['update'])){
        $booking_ID = filter_var($_POST['booking_ID'], FILTER_SANITIZE_STRING);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $cardnumber = filter_var($_POST['cardnumber'], FILTER_SANITIZE_STRING);
        $expmonth = filter_var($_POST['expmonth'], FILTER_SANITIZE_STRING);
        $expyear = filter_var($_POST['expyear'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $CVC_number = filter_var($_POST['CVC_number'], FILTER_SANITIZE_STRING);
    
        $update_payment = $conn->prepare("UPDATE `Payment` SET booking_ID = ?, name = ?, cardnumber = ?, expmonth = ?, expyear = ?, email = ?, CVC_number = ? WHERE booking_ID = ?");
        $update_payment->execute([$booking_ID, $name, $cardnumber, $expmonth, $expyear, $email, $CVC_number, $booking_ID]);
        header('location:../homepage/home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/payment.css">
</head>
<body>

<h2>Payment Form</h2>
<section id=payment-form>
    <form action="" method="post" onsubmit="return displayAlert()">
        <label for="booking_ID">Booking ID:</label><br>
        <input type="text" id="booking_ID" name="booking_ID"><br>
        <label for="name">Name on Card:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="cardnumber">Card number:</label><br>
        <input type="text" id="cardnumber" name="cardnumber"><br>
        <label for="expmonth">Expiry Month:</label><br>
        <input type="text" id="expmonth" name="expmonth"><br>
        <label for="expyear">Expiry Year:</label><br>
        <input type="text" id="expyear" name="expyear"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="CVC_number">CVV Number:</label><br>
        <input type="text" id="CVC_number" name="CVC_number"><br>
        <div class="btn-container-next">
            <input type="submit" value="Submit" name="book" class="btn">
            <input type="button" value="next > " name="book" class="btn" onclick="location.href='../homepage/home.php';">
        </div>
    </form> 
</section>

<script>
    function displayAlert() {
        alert("Payment is successful!");
        return true;
    }
    function displayAlert() {
        alert("Payment is successful!");
        window.location.href = '../homepage/home.php';
        return true;
    }
</script>

</body>
</html>
