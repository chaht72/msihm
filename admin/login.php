<!-- backend for login page -->
<?php
error_reporting(0);
session_start();
include("../database/database.php");
$db = new database();

if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = md5($_POST['password']);
  $query = "SELECT * FROM admin WHERE `username` = '$user' || `email` = '$user' && `password` = '$password'";
  $data = $db->select($query);
  $total = $data->num_rows;

  if ($total == 1) {
    $_SESSION['user_name']=$user;
    header('location:../service_provider/show_provider.php');
  }else{
    echo "<script>alert('Password or Username is incorrect');</script>";
    echo "<script>window.open('../index.php','_self')</script>";
  }
}

?>