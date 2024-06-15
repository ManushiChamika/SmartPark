
<?php
require 'config.php';

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["admin_login"]))
{  //To check if the user clicked on the Login button

    //Validating the inputs
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password= filter_input(INPUT_POST, 'password');


     // Query to retrieve the password associated with the provided username
     $sql = "SELECT password FROM admin_account WHERE user_name = '$user_name' and password='$password'";
     $result = $conn->query($sql);
    
     $validadmin = false;

     while($row = $result -> fetch_assoc()){
        if($password == $row['password']){
            $validadmin = true;
            session_start();
            $_SESSION['logged_admin'] = $user_name;
            echo("successful login");
        }
    }

    
    if(!$validadmin){
        echo '<script>alert("Invalid user_name/password!");</script>';
        header('Location:question.php');
        exit();
    }
    else{
        header('Location:admin_page.php');
        exit();
    }
}
// Closing the database connection
$conn->close();
?>
