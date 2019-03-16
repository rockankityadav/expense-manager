<?php
session_start();
include("admin/includes/db.php");
if(isset($_POST['insert_new']))
{
$elec = $_POST['elec'];
$maint = $_POST['maint'];
$water = $_POST['water'];
$rent = $_POST['rent'];
$other=$_POST['other'];
$insert_str= "insert into expense (elec,maint,water,rent,other) values ('$elec','$maint','$water','$rent','$other')";
$insert_user = mysqli_query($con, $insert_str);
if($insert_user)
{
   
  echo "<script>window.open('index.php','_self')</script>"; 
}
}

?>