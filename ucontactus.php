<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\contactus.css">
<link rel="stylesheet" href="cssmain\table.css" type="text/css"/>	
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="userhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:600px;height:120px;"></a>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="userhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="books.php">View Books</a></li>
      <li><a href="issue.php">My Issue Status</a></li>
      
    </ul>
  </li>
  <li><a href="#">STUDY RESOURCES</a>
    <ul>
      <li><a href="usyllabus.php">Syllabus</a></li>
      <li><a href="uebooks.php">E-books</a></li>
	  <li><a href="upapers.php">University Papers</a></li>
	  <li><a href="uonlinetest.php">Free Online Test</a></li>
    </ul>
  </li>
  <li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="ugoals.php">Our Goals</a></li>
	  <li><a href="umission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="ucontactus.php">Contact Us</a></li>
	</ul>
  </li>
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="profile.php">View Profile</a></li>
	  <li><a href="logout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>

<img src="images\aboutus.jpg" alt="Online Test" style="float:left;width:1295px;height:200px;">

<div id="left">
</div>

<div id="right">
</div>

 <div id="content" style="margin-top:250px">
 
  <div id="contentleft">
  <p style="position:relative;top:40px;left:100px;float:left;font-size:15px;color:black"><img src="sid.jpg" alt="sid" style="position:relative;top:0px;left:0px;float:left;">
  -> <b><i><u>Contact Me !:<br><br></b></i></u>
  -> <b>Facebook:</b> Siddhant Thakur<br>
  -> <b>Twitter:</b> chotaathakur<br>
  -> <b>Email ID:</b> sidtab2@gmail.com<br>
  -> <b>Contact:</b> (+91) 9769901516<br><br><br><br><br><br><br> 
  -> <b>Name:</b> Siddhant Thakur<br>
  -> Currently studying in Third Year Computer Engineering<br>at Vidyalankar Institute of Technology, Affiliated with <br>Mumbai University.<br>
  -> Co-designed Front-end and Back-end of this website.<br>
  -> Interests : Playing Football, Or any sport for that matter.<br>Also play chess, piano, e-sports for fun.<br>
  -> <b>Thank You for Visiting !!!</b><br><br>

  </p>
  </div>

  <div id="contentright"> 
  <p style="position:relative;top:40px;left:100px;float:left;font-size:15px;color:black"><img src="apt.jpg" alt="apt" style="position:relative;top:0px;left:0px;float:left;">
  -> <b><i><u>Contact Me !:<br><br></b></i></u>
  -> <b>Facebook:</b> Akshay Tambe<br>
  -> <b>Twitter:</b> akshaytambe24<br>
  -> <b>Email ID:</b> aptambe24@gmail.com<br>
  -> <b>Contact:</b> (+91) 9969042406<br><br><br><br><br><br><br> 
  -> <b>Name:</b> Akshay Prakash Tambe<br>
  -> Currently studying in Third Year Computer Engineering<br>at Vidyalankar Institute of Technology, Affiliated with <br>Mumbai University.<br>
  -> Co-designed Front-end and Back-end of this website.<br>
  -> Interests : Getting to Know About New Gadgets Around<br>
  -> <b>Thank You for Visiting !!!</b><br><br>

  </p>
  </div>
 </div> 
 
 
<div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>