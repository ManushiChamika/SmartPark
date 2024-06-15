<?php
    // Start the session
    session_start();

    include './connect.php';

    if(isset($_COOKIE['User_ID'])){
        $User_ID = $_COOKIE['User_ID'];
    }else{
        setcookie('User_ID', create_unique_id(), time() + 60*60*24*30, '/');
        header('location:index.php');
    }
     
    $floor = isset($_GET['floor']) && !empty($_GET['floor']) ? $_GET['floor'] : '';
    $slot = isset($_GET['slot']) && !empty($_GET['slot']) ? $_GET['slot'] : '';

    $total_slots = 0; 


    if(isset($_POST['book'])){

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['floor'] = $_POST['floor'];
        $_SESSION['slot'] = $_POST['slot'];
        $_SESSION['car_number'] = $_POST['car_number'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['entry_date'] = $_POST['entry_date'];
        $_SESSION['entry_time'] = $_POST['entry_time'];
        $_SESSION['exit_date'] = $_POST['exit_date'];
        $_SESSION['exit_time'] = $_POST['exit_time'];
        
        $booking_ID = create_unique_id();
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $floor = $_POST['floor'];
        $floor = filter_var($floor, FILTER_SANITIZE_STRING);
        $slot = $_POST['slot'];
        $slot = filter_var($slot, FILTER_SANITIZE_STRING);
        $car_number = $_POST['car_number'];
        $car_number = filter_var($car_number, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $entry_date = $_POST['entry_date'];
        $entry_date = filter_var($entry_date, FILTER_SANITIZE_STRING);
        $entry_time = $_POST['entry_time'];
        $entry_time = filter_var($entry_time, FILTER_SANITIZE_STRING);
        $exit_date = $_POST['exit_date'];
        $exit_date = filter_var($exit_date, FILTER_SANITIZE_STRING);
        $exit_time = $_POST['exit_time'];
        $exit_time = filter_var($exit_time, FILTER_SANITIZE_STRING);
        
        $check_availability = $conn->prepare("SELECT * FROM `bookings` WHERE entry_date = ? AND entry_time = ? AND exit_date = ? AND exit_time = ?");
        $check_availability->execute([$entry_date, $entry_time, $exit_date, $exit_time]);
        
        while($fetch_availability = $check_availability->fetch(PDO::FETCH_ASSOC)){
            $total_slots += $fetch_availability['slots'];
        }
        
        // if the parking has total 30 slots 
        if($total_slots >= 30){
            $warning_msg[] = 'slots are not available';
        
        }else{
            $verify_reservations = $conn->prepare("SELECT * FROM `bookings` WHERE User_ID = ? AND name = ? AND floor = ? AND slot = ? AND car_number = ? AND email = ? AND entry_date = ? AND entry_time = ? AND exit_date = ? AND exit_time = ?");
            $verify_reservations->execute([$User_ID, $name, $floor, $slot, $car_number, $email, $entry_date, $entry_time, $exit_date, $exit_time]);


        if($verify_reservations->rowCount() > 0){
            $warning_msg[] = 'Slot reserved already!';
        }else{
            $reserve_slot = $conn->prepare("INSERT INTO `bookings`(booking_ID, User_ID, name, floor, slot, car_number, email, entry_date, entry_time, exit_date, exit_time) VALUES(?,?,?,?,?,?,?,?,?,?,?)"); // Corrected SQL query
            $reserve_slot->execute([$booking_ID, $User_ID, $name, $floor, $slot, $car_number, $email, $entry_date, $entry_time, $exit_date, $exit_time]);
            $success_msg[] = 'Slot reserved successfully!';
        }
            }
            
        if($total_slots >= 30){
            $warning_msg[] = 'slots are not available';
        }else{
            if($floor == 'Basement Parking Space'){
                $update_slot = $conn->prepare("UPDATE `basement_parking_space` SET `is_available`=0 WHERE `slot_number`=?");
                $update_slot->execute([$slot]);
            } elseif($floor == 'First Floor Parking'){
                $update_slot = $conn->prepare("UPDATE `first_floor_parking` SET `is_available`=0 WHERE `slot_number`=?");
                $update_slot->execute([$slot]);
            } elseif($floor == 'Second Floor Parking'){
                $update_slot = $conn->prepare("UPDATE `second_floor_parking` SET `is_available`=0 WHERE `slot_number`=?");
                $update_slot->execute([$slot]);
            } elseif($floor == 'Outer Parking'){
                $update_slot = $conn->prepare("UPDATE `outer_parking` SET `is_available`=0 WHERE `slot_number`=?");
                $update_slot->execute([$slot]);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link rel="stylesheet" href="./css/index.css">
   <script src="./js/javascript.js"></script>
</head>
<body>

<!-- Reservation section starts -->
<section class="reservation" id="reservation">
    <form action="" method="POST" id="myForm" onsubmit="return showPopup()">
        <h3>Make a Reservation</h3>
        <div class="flex">
            <div class="box">
                <p>Your Name <span>*</span></p>
                <input type="text" name="name" maxlength="50" required placeholder="Enter your name" class="input" required>
            </div>

            <div class="box">
                <p>Floor <span></span></p>
                <input type="text" name="floor_display" maxlength="100" value="<?php echo htmlspecialchars($floor); ?>" readonly class="input">
                <input type="hidden" name="floor" value="<?php echo htmlspecialchars($floor); ?>">
            </div>

            <div class="box">
                <p>Slot <span></span></p>
                <input type="text" name="slot_display" maxlength="100" value="<?php echo htmlspecialchars($slot); ?>" readonly class="input">
                <input type="hidden" name="slot" value="<?php echo htmlspecialchars($slot); ?>">
            </div>

            <div class="box">
                <p>Car Number <span>*</span></p>
                <input type="text" name="car_number" maxlength="50" required placeholder="Enter car number" class="input" required>
            </div>

            <div class="box">
                <p>Your Email <span>*</span></p>
                <input type="email" name="email" maxlength="50" required placeholder="Enter your email" class="input" required>
            </div>

            <div class="box">
                <p>Entry Date <span>*</span></p>
                <input type="date" name="entry_date" class="input" required>
            </div>

            <div class="box">
                <p>Entry Time <span>*</span></p>
                <input type="time" name="entry_time" class="input" required>
            </div>

            <div class="box">
                <p>Exit Date <span>*</span></p>
                <input type="date" name="exit_date" class="input" required>
            </div>

            <div class="box">
                <p>Exit Time <span>*</span></p>
                <input type="time" name="exit_time" class="input" required>
            </div>
        </div>
        <div class="btn-container">
            <input type="submit" value="Submit" name="book" class="btn">
            <input type="button" value="next > " name="book" class="btn1" onclick="location.href='../reservation/reservation.php';">
        </div>
    </form>
</section>
<!-- Reservation section ends -->
</body>
</html>