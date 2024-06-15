<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
//Checking whether the user changed the password
    if(isset($_POST['changePW']))
       {
        
        $un=filter_input(INPUT_POST, 'username');
        $new_password = filter_input(INPUT_POST, 'new_password');
        $confirmpw = filter_input(INPUT_POST,'confirmpw');

           //Retrieving the user data from the user table in the database
           $sql1 = "SELECT * FROM user WHERE Username = '$un'";
           $result = $conn->query($sql1);

           $validpw= false;
           while($row = $result -> fetch_assoc()){
               if($un == $row['Username'])
               {
                   $validpw = true;
                   $pw_sql = "UPDATE user SET user_Password = '$new_password',Confirm_password='$confirmpw' WHERE Username = '$un'";

                   $result1= $conn->query($pw_sql);
                   header('Location:login.php');

               }
           }
        }
        $conn->close();
?>