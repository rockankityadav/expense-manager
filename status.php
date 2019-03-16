<?php
session_start();
include("admin/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update status</title>
	
    
	<link rel="stylesheet" href="styles.css">
    
        <script>
//for registration page validation
function chk()
{
var first= document.myfrm.name1.value;
var second= document.myfrm.salary1.value;
var no= document.myfrm.phone1.value;
var elec_d= document.myfrm.elec_d.value;
var water_d= document.myfrm.water_d.value;
var main_d= document.myfrm.main_d.value;
var rent_d= document.myfrm.rent_d.value;    


if (first=="" || first.length<4 || first.length>21)
{
alert("please enter your first name");
return false;
}
else if(second=="" || isNaN(second))
{
alert("please enter your Salary");
return false;
}
else if(no=="" || no.length!=10)
{
alert("mobile number should be 10 digit");
return false;
}
else if(elec_d==""){
    alert("enter due date for electricity bill");
    return false;
}
else if(water_d==""){
    alert("enter due date for water bill");
    return false;
}
else if(main_d==""){
    alert("enter due date for maintanance bill");
    return false;
}
else if(rent_d==""){
    alert("enter due date for Rent bill");
return false;
}
else
{
alert("updated succesfully");
return true;
}
}
</script>
   
</head>
<body>
    <div style="align-content: center;padding: 100px 560px;">
    <form name="myfrm" class="modal-content animate" action="sta.php" method="post">
      <div class="container" style="background-color:#f1f1f1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="profile.png" alt="Avatar" class="avatar">
    <div class="container" style="background-color:#f1f1f1">
      <h1 class=".rh1">Update status</h1>
        <p><center>Name</center></p>
        <center><input  type="text" name="name1" placeholder="Enter First Name." required></center>
        <p><center>Salary</center></p>
        <center><input type="text"   name="salary1" placeholder="Enter Salary" required></center>
        <p><center>Phone Number</center></p>
        <center><input type="text" name="phone1" placeholder="Enter Phone Number" required></center>
        <p><center>Electricity date</center></p>
        <center><input  type="date" name="elec_d" placeholder="Electricity due date." required></center>
        <p><center>water bill date</center></p>
        <center><input type="date"   name="water_d" placeholder="water due date" required></center>
        <p><center>mainatance bill date</center></p>
        <center><input  type="date" name="main_d" placeholder="maintanace due date" required></center>
        <p><center>Rent bill</center></p>
        <center><input type="date"   name="rent_d" placeholder="Rent due date" required></center>
        <br>
      <center><button type="submit" name="insert_new"  onclick="chk()" style="width: 80%; height: 40px; border: 1px solid ; background-color:lightgreen; color: white">Submit</button></center>
        
        <center><button type="reset" value="reset" style="width: 80%; height: 40px; border: 1px solid ; background-color:lightcoral; color: white">Reset</button></center>
    </div>
      </div>
      </div>
        
  </form>
    </div>
</body>
</html>