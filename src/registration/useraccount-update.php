<!--IT23237636 Nujaba MIF-->
<?php
session_start();
require 'config.php';

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Authenticating the logged in user
if (isset($_SESSION['logged_user'])){
    $un = $_SESSION['logged_user'];


       //Checking whether the user changed the password

       if(isset($_POST['updatePW']))
       {

        $password = filter_input(INPUT_POST, 'password');
        $new_password = filter_input(INPUT_POST, 'new_password');
        $confirmpw = filter_input(INPUT_POST,'confirmpw');

           //Retrieving the user's current password from the user table in the database
           $sql1 = "SELECT user_Password FROM user WHERE Username = '$un'";
           $result = $conn->query($sql1);

           $validpw= false;
           while($row = $result -> fetch_assoc()){
               if($password == $row['user_Password'])
               {
                   $validpw = true;
                   $pw_sql = "UPDATE user SET user_Password = '$new_password',Confirm_password='$confirmpw' WHERE Username = '$un'";

                   $result1= $conn->query($pw_sql);
                   header('Location: Login.php');

               }
           }

           
       }

        //Checking whether the user wants to delete the profile
        if(isset($_POST['deleteProfile']))
        {
            $deletesql = "DELETE FROM user WHERE Username ='$un'";

            if ($conn->query($deletesql))
            {    setcookie('username', $_POST['username'], ( time() -3600) );
                header('Location: sign-up.php');
            }
            else
            {
                echo "Error deleting user profile!";
            }
    
        }
    }



$conn->close();
?>