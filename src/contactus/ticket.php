<?php 

    require 'config.php';

?>
<?php
    session_start();

    if(isset($_SESSION['memberID'])){
        $edit = $_SESSION['memberID'];

        $sql="Select * from form where MemberId ='$edit'";
        $run=mysqli_query($con,$sql);
    
        while($row=mysqli_fetch_array($run)){
            $memberId=$row['MemberId'];
            $vehicleNumber=$row['Vehicle'];
            $ParkingSection=$row['ParkingSection'];
            $contact=$row['Contact'];
            $service=$row['Services'];
    
        }
    

    }
   

?>


<?php

if(isset($_POST['save'])){

    $memberId=$_POST['mID'];
    $vehicleNumber=$_POST['vNum'];
    $ParkingSection=$_POST['pSec'];
    $contact=$_POST['cNum'];
    $service=$_POST['service'];

    $sql = "UPDATE form SET MemberId='$memberId',Vehicle='$vehicleNumber',ParkingSection='$ParkingSection',Contact='$contact',Services='$service' WHERE MemberId ='$edit'";
                if($con->query($sql))
                {
                    echo "Inserted successfully";
                }
                else
                {
                    echo "Error:". $con->error;
                }
    
     header('location:contact.php');

     
     
}

?>

<?php 
    
    if(isset($_POST['delete'])){  

    $sql="DELETE  FROM form WHERE MemberId ='$edit'";
    if($con->query($sql))
    {
        echo "Inserted successfully";
    }
    else
    {
        echo "Error:". $con->error;
    }

    header('location:contact.php');

    }
    
?>


<!DOCTYPE html>
<html>

<head>
    <title>SmartPark</title>
    <link rel="stylesheet" href="ticketpage.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(background5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            color: greenyellow;
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            color: red;
            text-align: center;
        }

        .field {
            width: 50%;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        p {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .popup.active {
            display: block;
        }
    
    </style>

</head>

<body>

    <h1>Ticket Confirmed Message</h1>
    <fieldset class="field">

        <h2>Thank you Sir/Madam for your Ticket Raising</h2>
        <hr>

        <p>Thank you for reaching out to us regarding your previously raised ticket in our automated parking system. Your concern is important to us, and we are actively working to address it. Our support team is currently reviewing your ticket and will provide a resolution as quickly as possible. We understand the importance of a smooth parking experience and apologize for any inconvenience this may have caused. Rest assured, we are committed to resolving your issue and ensuring your satisfaction with our system. If you have any further questions or updates regarding your ticket, please feel free to reach out to us. Thank you for your patience and cooperation.</p>
        <center>
            <button id="edit-support">Do You Have any Changes?</button> <br> <br>

        </center>


    </fieldset>
    


    <div class="overlay"></div>
    <div class="popup">
        <form method="post" action="ticket.php" name="filled_form">
            
           
        

                <fieldset class="one">
                    <center>
                        <b>Member Id</b> <br> <input type="text" id="memberid" name="mID" value="<?php echo $memberId ?>"> <br> <br>
                        <b>Vehicle Number</b> <br> <input type="text" id="vnumber" name="vNum" value="<?php echo $vehicleNumber ?>">  <br> <br>
                        <b>Parking Section</b> <br> <input type="text" id="psection" name="pSec" value="<?php echo $ParkingSection ?>">  <br> <br>
                        <b>Contact Number</b> <br> <input type="text" id="cnumber" name="cNum" value="<?php echo $contact ?>">  <br> <br>
                        <b>Services</b> <br>
                        Technical Service <input type="radio" id="technicalService" name="service" value="Technical" <?php if ($service == 'Technical Service') echo 'checked'; ?>> <br>
                        Fuel Service <input type="radio" id="fuelService" name="service" value="Fuel" <?php if ($service == 'Fuel Service') echo 'checked'; ?>> <br>
                        Health Issue <input type="radio" id="healthIssue" name="service" value="Health" <?php if ($service == 'Health Issue') echo 'checked'; ?>> <br>
                        Accident <input type="radio" id="accident" name="service" value="Accident" <?php if ($service == 'Accident') echo 'checked'; ?>> <br>
                        Food Service <input type="radio" id="foodService" name="service" value="Food" <?php if ($service == 'Food Service') echo 'checked'; ?>> <br> <br>

                        <button type="submit" name="save"> Save changes</button>
                        <button type="submit" name="delete"> Delete </button>

                    </center>

                </fieldset>

        </form>
    </div>

    <a href="contact.php"> Contact Us </a>
    
    <script src="ticketpage.js"></script>
</body>

</html>
