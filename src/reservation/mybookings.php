<?php
    include './connect.php';

    if(isset($_COOKIE['User_ID'])){
        $User_ID = $_COOKIE['User_ID'];
    }else{
    setcookie('User_ID', create_unique_id(), time() + 60*60*24*30, '/');
    header('location:index.php');
    }

    if(isset($_POST['cancel'])){

        $booking_ID = $_POST['booking_ID'];
        $booking_ID = filter_var($booking_ID, FILTER_SANITIZE_STRING);
        
        $verify_booking = $conn->prepare("SELECT * FROM `bookings` WHERE booking_ID = ?");
        $verify_booking->execute([$booking_ID]);
        
        if($verify_booking->rowCount() > 0){
            $delete_booking = $conn->prepare("DELETE FROM `bookings` WHERE booking_ID = ?");
            $delete_booking->execute([$booking_ID]);
            $success_msg[] = 'booking cancelled successfully!';
        }else{
            $warning_msg[] = 'booking cancelled already!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My reservations</title>
    <link rel="stylesheet" href="./css/mybookings.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
    <script src="./js/javascript.js"></script>
</head>
<body>

<section class="myReservations">
    <h1 class="heading">My Reservations</h1>
    <div class="box-container">

        <?php
            $select_bookings = $conn->prepare("SELECT * FROM `bookings` WHERE User_ID = ?");
            $select_bookings->execute([$User_ID]);
            if($select_bookings->rowCount() > 0){
                    while($fetch_booking = $select_bookings->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="box">
                <p>Your Name : <span><?= $fetch_booking['name']; ?></span></p>
                <p>Floor : <span><?= $fetch_booking['floor']; ?></span></p>
                <p>Slot : <span><?= $fetch_booking['slot']; ?></span></p>
                <p>Car Number : <span><?= $fetch_booking['car_number']; ?></span></p>
                <p>Your Email : <span><?= $fetch_booking['email']; ?></span></p>
                <p>Entry Date : <span><?= $fetch_booking['entry_date']; ?></span></p>
                <p>Entry Time : <span><?= $fetch_booking['entry_time']; ?></span></p>
                <p>Exit Date : <span><?= $fetch_booking['exit_date']; ?></span></p>
                <p>Exit Time : <span><?= $fetch_booking['exit_time']; ?></span></p>
                <p>Booking ID : <span><?= $fetch_booking['booking_ID']; ?></span></p>

                <div class="btn-container">
                    <form action="" method="POST">
                        <input type="hidden" name="booking_ID" value="<?= $fetch_booking['booking_ID']; ?>">
                        <input type="submit" value="Delete Reservation" name="cancel" class="btn1" onclick="return confirm('Cancel this reservation?');">
                    </form>
                    <form action="edit_booking.php" method="POST">
                        <input type="hidden" name="booking_ID" value="<?= $fetch_booking['booking_ID']; ?>">
                        <input type="submit" value="Edit Reservation" name="edit" class="btn">
                    </form>
                    <form action="payment.php">
                        <input type="submit" value="continue To Payment" name="edit" class="btn3">
                    </form>
                </div>
            </div>

        <?php
            }
            }else{
        ?> 

        <div class="no-bookings">
            <p>No Reservations Found!</p>
            <a href="./reservation.php" class="btn">Book new</a>
            <a href="../homepage/home.php" class="btn">Go to home page</a>
        </div>

        <?php
                }
        ?>
    </div>
</section>



</div>
</body>
</html>