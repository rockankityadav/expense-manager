<?php
session_start();
include("cat.php");
if(isset($_SESSION['username']))
{
?>
<!doctype>
    <html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="main.css" rel="stylesheet" >
    <link type="text/css" href="main1.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .cat li a
    {
        text-decoration: none;
    }
    </style>
	<title>Medicare</title>
</head>
<body  >
	<header>
        <nav id="navbar"  >
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
        <a href="main1.html">My profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="main1.html">My Orders&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="offer.php">Offer Zone</a>
            </div>
        <br>
        <div>
        <a href="main1.html">my wallet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br><br>
        <div>
        <a href="contect.php">call us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
        	<a href="category.php" class="home" class="dropbtn">Buy Online</a>
            </div>
            <div  class="dropdown" >
        	<a href="services/service.php" class="home" class="dropbtn">services</a>
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
         
    <div class="logo">
        <li><a href="#"><img src="logo1.PNG"  alt="Medicare logo" width="100%" height="100%"></a></li>
    </div>
        </nav>
    </header>
    <div class="sidenav">
        
            <div class="cat">
                <h1>Choose What To Buy</h1>
                <h3>Categories</h3>
                <a href="products/anxiety/anxiety.html" target="catbody" style=color:black;>Anxiety&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br>
                <a href="products/bodycare/bodycare.html" target="catbody" style=color:black;>Bodycare&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br>
                <a href="products/cough/cough.html" style=color:black; target="catbody">Cough&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br>
                <a href="products/fever/fever.html" style=color:black; target="catbody">Fever&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br>
        </div>     
        
    </div>
    <iframe name="catbody" height="80%" width="85%" align="Right" ></iframe>
    

    </body>
</html>


<?php
}

else
{
echo "<script>alert('please login first then buy the medicine ')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 
    }

?>
