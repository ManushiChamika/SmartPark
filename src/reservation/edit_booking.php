<?php
include './connect.php';

if(isset($_POST['booking_ID'])){
    $booking_ID = $_POST['booking_ID'];
    $select_booking = $conn->prepare("SELECT * FROM `bookings` WHERE booking_ID = ?");
    $select_booking->execute([$booking_ID]);
    $booking = $select_booking->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['update'])){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $car_number = filter_var($_POST['car_number'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $entry_date = filter_var($_POST['entry_date'], FILTER_SANITIZE_STRING);
    $entry_time = filter_var($_POST['entry_time'], FILTER_SANITIZE_STRING);
    $exit_date = filter_var($_POST['exit_date'], FILTER_SANITIZE_STRING);
    $exit_time = filter_var($_POST['exit_time'], FILTER_SANITIZE_STRING);

    $update_booking = $conn->prepare("UPDATE `bookings` SET name = ?, car_number = ?, email = ?, entry_date = ?, entry_time = ?, exit_date = ?, exit_time = ? WHERE booking_ID = ?");
    $update_booking->execute([$name, $car_number, $email, $entry_date, $entry_time, $exit_date, $exit_time, $booking_ID]);
    header('location:../reservation/reservation.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/editReservation.css">
</head>
<body>

<section class="edit-booking">
    <div class="edit-reservation">
        <h1 class="heading">Edit Reservation</h1>
        <form action="" method="POST" class="form">
            <input type="hidden" name="booking_ID" value="<?= $booking['booking_ID']; ?>">
            Name: <input type="text" name="name" value="<?= $booking['name']; ?>">
            Car Number: <input type="text" name="car_number" value="<?= $booking['car_number']; ?>">
            Email: <input type="text" name="email" value="<?= $booking['email']; ?>">
            Entry Date: <input type="text" name="entry_date" value="<?= $booking['entry_date']; ?>">
            Entry Time: <input type="text" name="entry_time" value="<?= $booking['entry_time']; ?>">
            Exit date: <input type="text" name="exit_date" value="<?= $booking['exit_date']; ?>">
            Exit time: <input type="text" name="exit_time" value="<?= $booking['exit_time']; ?>">
            <div class="button-container">
                <input type="button" value=" < back " name="book" class="btn1" onclick="location.href='./mybookings.php';">
                <input type="submit" value="Update Reservation" name="update" class="btn">
            </div>         
        </form>
    </div>
</section>

</body>
</html>
