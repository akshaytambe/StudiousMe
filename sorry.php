<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
</head>

<body>
<div id="wrapper">
<?php
$usernm = $_SESSION['name'];
?>
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
      <li><a href="issue.php">View Issue History</a></li>
      
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
<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px;margin-left:327px; width: 600px; height:500px">
	<img src="images\sorry.jpg" alt="University" style="float:left;width:400px;height:300px;margin-left: 100px;">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center><p ><font size='7px' color='black'><b>YOU HAVE ALREADY<br>ISSUED 2 BOOKS<b></font></p></center>
</div>
 <div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>