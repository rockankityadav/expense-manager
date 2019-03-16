<?php 
session_start(); 
unset($_SESSION['username']);
session_destroy(); 
echo "<script>alert('Logout Sucessfully!Thank you Visit again')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 
?>
