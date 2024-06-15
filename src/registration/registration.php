<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';

//Error Reporting
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
 
 if(isset($_POST["submit_btn"])){  //We check if the user clicked on the Register button
    $name = $_POST["person_name"];
    $email = $_POST["email"];
    $username = $_POST["user_name"];
    $password = $_POST["user_password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $vehicle_type = $_POST["vehicle_type"];
    $number_plate = $_POST["number_plate"];
   
   
   //SQL Query inserts form data into the User table in the database

    $sql ="INSERT INTO user(User_id,person_Name, Email,Username,user_Password,Confirm_password,Contact_no,Vehicle_type,Number_plate) values ('','$name','$email','$username','$password','$confirm_password','$phone','$vehicle_type','$number_plate')";
  
   //Checking if the queries are successful or not
    if ($conn->query($sql)){
         echo "Registration successful";
         //User is redirected to user account page after a successful registration
         header('Location:login.php');

    }
    else{
        "Error : ".$conn->error;
    }
}

 


//Connection is closed
$conn->close();
?>