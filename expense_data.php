<?php
session_start();
include("admin/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expenses</title>
	
    
	<link rel="stylesheet" href="styles.css">
    
        <script>
//for registration page validation
function chk()
{
var light=document.myfrm1.elec.value;
var maintanance=document.myfrm1.maint.value;
var water=document.myfrm1.water.value;
var Rent=document.myfrm1.rent.value;
var other=document.myfrm1.other.value;

if (light=="" || isNaN(light) || light.length>5)
{
alert("please enter your electricity bill");
return false;
}
else if(maintanance=="" || isNaN(maintanance) || maintanance.length>9)
{
alert("please enter your maintanance bill");
return false;
}
else if(isNaN(water) || water.length>6 || water=="")
{
alert("please enter your water bill");
return false;
}

else if(isNaN(Rent) || Rent.length>9 || Rent=="")
{
alert("please enter your rent");
return false;
}
    
else if(isNaN(other) || other.length>9)
{
alert("please enter your other expenses");
return false;
}
else
{
alert("succesfully submitted");
return true;
}
}
</script>
   
</head>
<body>
    <div style="align-content: center;padding: 100px 560px;">
    <form name="myfrm1" class="modal-content animate" action="exp.php" id="frm1" method="post">
      <div class="container" style="background-color:#f1f1f1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container" style="background-color:#f1f1f1">
      <h1>Expenses</h1>
        <p><center>Electricity bill</center></p>
        <center><input  type="text" name="elec" placeholder="Enter Electricity bill" required></center>
        <p><center>Maintanance bill</center></p>
        <center><input type="text"   name="maint" placeholder="Enter Maintanace bill" required></center>
        <p><center>water bill</center></p>
        <center><input type="text" name="water" placeholder="Enter water bill" required></center>
        <p><center>Rent house</center></p>
        <center><input type="text"   name="rent" placeholder="Enter Rent" required></center>
        <p><center>Other charges</center></p>
        <center><input type="text" name="other" placeholder="Enter Other charges" required></center><br>
      <center><button type="submit" name="insert_new"  onclick="chk()" style="width: 80%; height: 40px; border: 1px solid ; background-color:lightgreen; color: white">Submit</button></center>
        
        <center><button type="reset" value="reset" style="width: 80%; height: 40px; border: 1px solid ; background-color:lightcoral; color: white">Reset</button></center>
    </div>
      </div>
      </div>
        
  </form>
    </div>
</body>
</html>