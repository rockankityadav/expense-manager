<?php 
session_start();
if(isset($_SESSION['username'])){
	echo "<b>Welcome:</b>" . $_SESSION['username'] . "<b style='color:yellow;'></b>" ;
		}
else {
	echo "<b>Welcome Guest:</b>";
	}
?>
<!DOCTYPE html>
<html>
<head>
    
	<link type="text/css" href="main.css" rel="stylesheet" >
    <link type="text/css" href="main1.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 50px;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
    color: white;
}

.containerTab {
    padding: 20px;
    color: white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Closable button inside the container tab */
.closebtn {
    float: right;
    color: white;
    font-size: 35px;
    cursor: pointer;
    background: "green"
}
     
      #map {
        height: 400px;width: 100%; 
       }
    #map1 {
        height: 400px;width: 100%; 
       }
    #map2 {
        height: 400px;width: 100%; 
       }
    
</style>
</head>
<body background = "axy.jpg" >
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
        <a href="main1.html">My status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="main1.html">statistics&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        <br>
        <div>
        <a href="main1.html">contact us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
        	<a href="category.php" class="home" class="dropbtn">My status</a>
            </div>
            <div  class="dropdown" >
        	<a href="services/service.php" class="home" class="dropbtn">statistic</a>
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

<div style="text-align:center">
  <h2> Contect info:-</h2>
  <p>Click on the box below:</p>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:green">
    Head Quarter-1
  </div>
  <div class="column" onclick="openTab('b2');" style="background:blue;">
    Head Quarter-2
  </div>
  <div class="column" onclick="openTab('b3');" style="background:red;">
    Head Quarter-3
  </div>
</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Head Quarter-1</h2>
  <p>Head Quarter-1 Name:-Ankit Yadav<br>
      Contect no:- +919869632063 <br>
      <mark> Email_id:ankityadavr197@gmail.com </mark></p>

</div>

<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Head Quarter-2</h2>
  <p>Head Quarter-2 Name:-Rajendra patil <br>
    Contect no:- +917028123287 <br>
    <mark>Email_id:-Rajendra.vinod.patil@gmail.com</mark></p>
</div>

<div id="b3" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Head Quarter-3</h2>
  <p> Head Quarter-3 Name:-Sunil Patil <br>
      Contect no:-+918007629541 <br>
      <mark>Email_id:-Sunil.patil@gmail.com.com</mark>
    </p>
    </div>
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>
</html> 
