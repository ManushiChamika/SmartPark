<?php 

    require 'config.php';

?>

<?php

    if(isset($_POST['submit'])){

        $memberId=$_POST['mID'];
        $vehicleNumber=$_POST['vNum'];
        $ParkingSection=$_POST['pSec'];
        $contact=$_POST['cNum'];
        $service=$_POST['service'];

        $sql = "INSERT INTO form(MemberId,Vehicle,ParkingSection,Contact,Services)values('$memberId', '$vehicleNumber', '$ParkingSection', '$contact', '$service' )";
                    if($con->query($sql))
                    {
                        echo "Inserted successfully";
                    }
                    else
                    {
                        echo "Error:". $con->error;
                    }

         
         session_start();
         $_SESSION['memberID'] = $memberId;
         
         header('location:ticket.php');

         
         
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>SmartPark</title>
    <link rel="stylesheet" href="help&support.css">
    <script src="../homepage/js/script.js"></script>
    
</head>

<body>

    <h1>Help & Support</h1>

    <form method="post" action="help&support.php">

        <fieldset class="one">
            <legend style="text-align: center; font-weight: bold; color: maroon">Service Request Form</legend>
            <label for="mID">Member ID:</label>
            <input type="text" placeholder="E.g: C0001" name="mID" required>

            <label for="vNum">Vehicle Number:</label>
            <input type="text" placeholder="E.g: NP:89087" name="vNum" required>

            <label for="pSec">Parking Section:</label>
            <input type="text" placeholder="E.g: A02" name="pSec" required>

            <label for="cNum">Contact Number:</label>
            <input type="text" placeholder="E.g: 0764606938" name="cNum" required>

            <label for="services" style="color: black;"> Services:</label>
            <div>
                <input type="radio" name="service"  value="Technical Service" required>
                <label for="service" style="color: goldenrod;">Technical Service</label>

                <input type="radio" name="service"  value="Fuel Service" required>
                <label for="service" style="color: goldenrod;">Fuel Service</label>

                <input type="radio" name="service" value="Health Issue" required>
                <label for="service" style="color: goldenrod;">Health Issue</label>

                <input type="radio" name="service" value="Accident" required>
                <label for="service" style="color: goldenrod;">Accident</label>

                <input type="radio" name="service"  value="Food Service" required>
                <label for="service" style="color: goldenrod;">Food Service</label>
            </div>
            

            <button type="submit" name="submit" onClick="myOnClickfn()">Submit</button>
            <button type="reset">Reset</button>

        </fieldset>

    </form>

    <a href="contact.php">Contact Us</a>

</body>

</html>
