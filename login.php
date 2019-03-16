<?php
session_start();
include('admin/includes/db.php');
if(isset($_POST['login']))
{
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $_SESSION['username']=$username;
  
  

  $login_user = "select * from register where user_name='$username' AND user_pass = '$password'";
  $result = mysqli_query($con, $login_user);
  $user = mysqli_num_rows($result);
  
  if($user==0)
  {
    echo "<script>alert('username or password is incorrect')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 

  }
  else
  {
    echo "<script>alert('Welcome to expense monitoring system!$username')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 

  }

}
?>