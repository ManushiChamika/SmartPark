<!--IT23237636 Nujaba MIF-->
<?php
require 'config.php';

session_start();
//Destroy the session
session_destroy();
header('Location:Login.php');
exit();
?>