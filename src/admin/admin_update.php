<?php
@include 'config.php';

$employee_id = $_GET['edit'];

if(isset($_POST['update_employee'])){

   $employee_name = $_POST['employee_name'];
   $NIC = $_POST['NIC'];
   $occupation = $_POST['occupation'];
   $salary = $_POST['salary'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $phone_no = $_POST['phone_no'];

   if(empty($employee_name) || empty($NIC) || empty($occupation) || empty($salary) || empty($address) || empty($email) || empty($phone_no)){
      $message[] = 'please fill out all the details!';    
   }else{

      $update_data = "UPDATE employee SET employee_name='$employee_name', NIC='$NIC', occupation='$occupation', salary='$salary', address='$address', email='$email', phone_no='$phone_no'  WHERE employee_id = $employee_id";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         header('location:admin_page.php');
      }else{
         $$message[] = 'please fill out all the details!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body id="update">

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-employee-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM employee WHERE employee_id = $employee_id");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3 class="title">update the Employee details</h3>
      <input type="text" class="box" name="employee_name" value="<?php echo $row['employee_name']; ?>" placeholder="enter employee name">
      <input type="text" class="box" name="NIC" value="<?php echo $row['NIC']; ?>" placeholder="enter employee NIC number">
      <input type="text" class="box" name="occupation" value="<?php echo $row['occupation']; ?>" placeholder="occupation">
      <input type="number" min="0" class="box" name="salary" value="<?php echo $row['salary']; ?>" placeholder="salary">
      <input type="text" class="box" name="address" value="<?php echo $row['address']; ?>" placeholder="address">
      <input type="email" class="box" name="email" value="<?php echo $row['email']; ?>" placeholder="email">
      <input type="tel" class="box" name="phone no" value="<?php echo $row['phone_no']; ?>" placeholder="phone no">
      <input type="submit" value="update employee" name="update_employee" class="btn">
      <a href="admin_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>