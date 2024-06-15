<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["login"]))
{  //To check if the user clicked on the Login button

    //Validating the inputs
    $username = filter_input(INPUT_POST, 'username');
    $password= filter_input(INPUT_POST, 'user_password');


     // Query to retrieve the password associated with the provided username
     $sql = "SELECT user_Password FROM user WHERE Username = '$username'and user_Password='$password'";
     $result = $conn->query($sql);

      //Saving the input data to Cookie
    
     $validUser = false;

     while($row = $result -> fetch_assoc()){
        if($password == $row['user_Password']){
            $validUser = true;
            session_start();
            $_SESSION['logged_user'] = $username;
            echo("successful login");

            if(isset($_POST['remember_me'])){
                //Store Login Credential
            
               setcookie('username', $_POST['username'], ( time() + ((365 * 24 * 60 * 60) *1) ));
            }else{
               
                //Delete Login Credential
                
               setcookie('username', $_POST['username'], ( time() -3600) );
            }
           
        }
    }

    
 if(!$validUser){
        echo '<script>alert("Invalid username/password!");</script>';
       exit();
    }

   header('Location:Useraccount.php');
}
 
// Closing the database connection
$conn->close();
?>
