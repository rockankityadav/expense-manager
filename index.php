<?php
session_start();
include("admin/includes/db.php");
?>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="main.css" rel="stylesheet" >
    <link type="text/css" href="main1.css" rel="stylesheet" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
	<title>Expence optimizer</title>
</head>
<body>
    <div class="bar">
            <div class="circle"></div>
            <p>Loading</p>
        </div>
	<header>
        <nav id="navbar" >
        <div  class="dropdown" >
            <div class="menubar">
         <div class="content">
        <div class="menu"></div>
        <div class="menu"></div>
             <div class="menu"></div>
             
             </div>
             </div>
            
    <div class="dropdown-content">
        
        <div>
        <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br><br>
    
        <div>
        <a href="main1.html">My status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="static.php">Statistics&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="contect.php">Contact us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br><br>
        <div>
        <a href="contect.php">FAQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="logout.php">Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
    </div>
            </div>
       	<div  class="dropdown" >
        	<a href="index.php" class="home" class="dropbtn">Home</a>
            </div>
		<div  class="dropdown" >
        	<a href="status.php" class="home" class="dropbtn" >Update status</a>
            </div>
            <div  class="dropdown" >
        	<a href="statistic.php" class="home" class="dropbtn">Statistics</a>
            </div>
            <div  class="dropdown" >
        	<a href="expense_data.php" class="home" class="dropbtn">Expenses</a>
            </div>
            <div class="dropdown">
        	<a href="contect.php" class="home" class="dropbtn">Contact Us</a>
        </div>
        <div class="dropdown">
        	<a href="faq.php" class="home" class="dropbtn">FAQ</a>
        </div>
         <div class="dropdown">
            <?php 
					if(isset($_SESSION['username'])){
					echo "<b>Welcome:</b>" . $_SESSION['username'] . "<b style='color:yellow;'></b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
        </div>
        </nav>
    </header>
    
    <script>
   function chkData()
{
var nm = document.frm.user.value;


if (nm=="")
{
alert("please enter name");
return false
}
}
</script>
    <table height="100%" width="100%" class="table">
    <td class="leftnav">
        <div class="card" >
            <div class="option1">
            <form name="frm" action="login.php" method="post">
            <img src="profile.png" class="profile">
            <h1>Login Here</h1>
            <p>Username</p>
            <input type="text" id="user" name="user" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" id="pass" name="pass" placeholder="Enter Password" required>
            <button type="submit" name="login"  onclick="chkData()" style="width: 100%; height: 10%; border: 1px solid ; background-color:lightcoral; color: white">Login</button>
            
<button onclick="document.getElementById('id01').style.display='block'" style="width: 100%; height: 10%; border: 1px solid ; background-color:lightgreen; color: white">Register now</button>
            </div>
            </form>
            
        </div>
    </td>
        <td class="centernav">
            <img src="expe.jpg"  height="400px" width="600px">
            <div style="padding:15px">
            <ul>
            <li>Faster processing of Expenses</li>
            <li>provide notification to the Expense Reduction</li>
            <li>Provide record of your all savings</li>
            <li>easy to handle all expenses </li>
                </ul></div>
        </td>
    
   <div class="bot" >
      <span  onclick="document.getElementById('modal1').style='z-index:1; position: fixed; margin-left: 94.8%; margin-top: 11%; border-radius: 3%; height:430; width:68;'" class="close1" title="Minimize">&minus;</span>
      <span  onclick="document.getElementById('modal1').style='z-index:1; position: fixed; margin-left: 73.8%; margin-top: 11%; border-radius: 3%; height:430; width:350'" class="close2" title="maximize">&square;</span>
       <iframe id="modal1" width="350" height="430" style="z-index: 1; position: fixed; margin-left: 73.8%; margin-top: 11%; border-radius: 3%;" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/e9803364-3e4c-4876-b4fb-36a9bc1b8815"></iframe>
       </div>
   
        <script>
//for registration page validation
function chkRegisteration()
{
var first= document.frm1.user_fname.value;
var second= document.frm1.user_sname.value;
var no= document.frm1.user_ph.value;
var email= document.frm1.user_email.value;
var nm= document.frm1.user_name.value;
var pw1= document.frm1.user_pass.value;
var pw2= document.frm1.user_repass.value;
var atpos= email.indexOf("@");
var dotpos= email.lastIndexOf(".");


if (first=="")
{
alert("please enter your first name");
return false
}
else if(second=="")
{
alert("please enteryour second name");
return false;
}
else if(no.length<10 && no.length>10)
{
alert("mobile number should be 10 digit");
return false;
}

else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert("please enter valid e-mail address");
return false;
}
else if(nm=="")
{
alert("enter a username");
return false;
}

else if(pw1==pw2 )
{
return true;
}
else
{
alert("Both password doesn't match");
return false;
}
}
</script>
        <div id="id01" class="modal">
  
  <form name="frm1" class="modal-content animate" action="register.php" method="post">
      <div class="container" style="background-color:#f1f1f1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="profile.png" alt="Avatar" class="avatar">
    <div class="container" style="background-color:#f1f1f1">
      <h1 class=".rh1">Register Here</h1>
        <p>First Name</p>
        <input  type="text" name="user_fname" placeholder="Enter First Name" required>
        <p>Second Name</p>
        <input type="text"   name="user_sname" placeholder="Enter Second Name" required>
          <p>Phone Number</p>
        <input type="text" name="user_ph" placeholder="Enter Phone Number" required>
          <p>Email</p>
        <input type="email" name="user_email" placeholder="Enter Email" required>
          <p>Username</p>
        <input type="text" name="user_name" autocomplete="off" placeholder="Enter Username" required>
          <p>Password</p>
        <input type="password" name="user_pass" autocomplete="off" placeholder="Enter password" required>
            <p>Re-enter password</p>
        <input type="password" name="user_repass" autocomplete="off" placeholder="Re-enter password" required>
       <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> 
      <button type="submit" name="insert_new"  onclick="chkRegisteration()" style="width: 100%; height: 7%; border: 1px solid ; background-color:lightgreen; color: white">Register</button>
        <br>
      
      <!--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
        <button type="reset" value="reset" style="width: 100%; height: 7%; border: 1px solid ; background-color:lightcoral; color: white">Reset</button>
    </div>
      </div>
      </div>
  </form>
        </div>
    </table>
    
     
    <div class="footer">
    <div class="card4">
  <p class="title">If you need any help</p>
  <p>Contact us</p>
  <div>
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter"></i></a>  
    <a href="https://www.linkedin.com/m/login/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
    </div>

    </body>
    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var modal = document.getElementById('id01');
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
        window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>



