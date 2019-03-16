<?php
include("admin/includes/db.php");
if(isset($_POST['insert_new']))
{
$user_fname = $_POST['user_fname'];
$user_sname = $_POST['user_sname'];
$user_ph = $_POST['user_ph'];
$user_email = $_POST['user_email'];
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$insert_str= "insert into register (user_fname, user_sname, user_ph, user_email, user_name, user_pass) values ('$user_fname','$user_sname','$user_ph','$user_email','$user_name','$user_pass')";
$insert_user = mysqli_query($con, $insert_str);
if($insert_user)
{
  echo "<script>alert('Welcome to expense monitoring system!$user_name, Login again')</script>";
  echo "<script>window.open('index.php','_self')</script>"; 
}
}
?>