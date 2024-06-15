<?php
@include 'config.php';

if(isset($_POST['add_employee'])){

   $employee_name = $_POST['employee_name'];
   $NIC = $_POST['NIC'];
   $occupation = $_POST['occupation'];
   $salary = $_POST['salary'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $phone_no = $_POST['phone_no'];

   if(empty($employee_name) || empty($NIC) || empty($occupation) || empty($salary) || empty($address) || empty($email) || empty($phone_no)){
      $message[] = 'please fill out all the details';
   }else{
      $insert = "INSERT INTO employee(employee_name, NIC, occupation, salary, address, email, phone_no) VALUES('$employee_name', '$NIC', '$occupation', '$salary', '$address', '$email', '$phone_no')";
      $upload = mysqli_query($conn,$insert);
      
      if($upload){
         $message[] = 'new employee details added successfully';
      }else{
         $message[] = 'could not add the employee details';
      }
   }

};

if(isset($_GET['delete'])){
   $employee_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM employee WHERE employee_id = $employee_id");
   echo
   header('location:admin_page.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <img src="./css/images/system.png" alt="system icon">
   <a href="../homepage/home.php" class="btn" id="logoutBtn">logout</a>

   <div class="admin-employee-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new employee</h3>
         <input type="text" placeholder="enter employee name" name="employee_name" class="box">
         <input type="text" placeholder="enter employee NIC number" name="NIC" class="box">
         <input type="text" placeholder="occupation" name="occupation" class="box">
         <input type="number" placeholder="salary" name="salary" class="box">
         <input type="text" placeholder="address" name="address" class="box">
         <input type="email" placeholder="email" name="email" class="box">
         <input type="tel" placeholder="phone no" name="phone no" class="box">
         <input type="submit" class="btn" name="add_employee" value="add employee">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM employee");
   
   ?>
   <div class="employee-display">
      <table class="employee-display-table">
         <thead>
         <tr>
            <th>Employee ID</th>
            <th>Employee name</th>
            <th>NIC</th>
            <th>Occupation</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['employee_id']; ?></td>
            <td><?php echo $row['employee_name']; ?></td>
            <td><?php echo $row['NIC']; ?></td>
            <td><?php echo $row['occupation']; ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone_no']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['employee_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['employee_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>
</body>
</html>