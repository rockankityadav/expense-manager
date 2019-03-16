<?php
session_start();
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="main.css" rel="stylesheet" >
    <link type="text/css" href="main1.css" rel="stylesheet" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>FAQ</title>
    
    <style>
/* Style the element that is used to open and close the accordion class */
p.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    margin-bottom:10px;
}

/* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
p.accordion.active, p.accordion:hover {
    background-color: #ddd;
}

/* Unicode character for "plus" sign (+) */
p.accordion:after {
    content: '\2795'; 
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

/* Unicode character for "minus" sign (-) */
p.accordion.active:after {
    content: "\2796"; 
}

/* Style the element that is used for the panel class */

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.4s ease-in-out;
    opacity: 0;
    margin-bottom:10px;
}

div.panel.show {
    opacity: 1;
    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
}
</style>
	 
</head>
<body  >

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
        	<a href="status.php" class="home" class="dropbtn" >My status</a>
            </div>
            <div  class="dropdown" >
        	<a href="statistic.php" class="home" class="dropbtn">statistics</a>
            </div>
            <div class="dropdown">
        	<a href="contect.php" class="home" class="dropbtn">Contact Us</a>
        </div>
        <div class="dropdown">
        	<a href="faq.php" class="home" class="dropbtn">FAQ</a>
        </div>
        </nav>
    </header>

     <h3>FAQs</h3>

<p class="accordion">Q1. Why does we need a expense managing app?</p>
    <div class="panel">In general,Expense manager records the daily expenses of user based on those expenses it helps to user to understand the daily expense and how can we do the saving.</div>
<p class="accordion">Q2. What are the advantages of expense managnig app?</p>
    <div class="panel">by using expense managing app we can enlist our expenses and also save us from extra expenses.</div>
<p class="accordion">Q3. When will the expense displayed?</p>
    <div class="panel">it will display eigther on weekly or on monthly as well as yearly also</div>

<p class="accordion">Q4. how much efficient this is?</p>
<div class="panel"> it is good as compared to other sites because it may also work efficiently.</div>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 


var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel');

for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panel, 'show', 'remove');

        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}

function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}

});
</script>
<div class="footer">
    <div class="card4">
  <p class="title">If you need any help</p>
  <p>Contact Us</p><div>
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter"></i></a>  
    <a href="https://www.linkedin.com/m/login/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>

</body>
</html>
