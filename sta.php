<?php
session_start();
include("admin/includes/db.php");
if(isset($_POST['insert_new']))
{
$name1 = $_POST['name1'];
$salary1 = $_POST['salary1'];
$phone1 = $_POST['phone1'];
$elec_d = $_POST['elec_d'];
$water_d = $_POST['water_d'];
$main_d = $_POST['main_d'];
$rent_d = $_POST['rent_d'];
$insert_str= "insert into status (name1,salary1,phone1,elec_d,water_d,main_d,rent_d) values ('$name1','$salary1','$phone1','$elec_d','$water_d','$main_d','$rent_d')";
$insert_user = mysqli_query($con, $insert_str);
if($insert_user)
{
   
  echo "<script>window.open('index.php','_self')</script>"; 
}
}

?>