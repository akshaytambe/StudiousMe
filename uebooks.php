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
 

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\ebook.jpg" alt="University"
  style="float:left;width:400px;height:150px;"> <b>E-BOOKS<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>First Year (FE) Question Papers - Semester 1 and 2:<b></font></p>
	<li><a href="ebooksem1.html" style="color: black; text-decoration: none">FE Semester 1 (All Branches)</a></li>
		<li><a href="ebooksem2.html" style="color: black; text-decoration: none">FE Semester 2 (All Branches)</a></li>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>Second Year (SE) Question Papers - Semester 3 and 4:<b></font></p>
	<li><a href="#" style="color: black; text-decoration: none">Automobile Engineering </a></li>
		<li><a href="#" style="color: black; text-decoration: none">Bio-Medical Engineering</a></li>
			<li><a href="#" style="color: black; text-decoration: none">Chemical Engineering</a></li>
				<li><a href="#" style="color: black; text-decoration: none">Civil Engineering</a></li>
					<li><a href="#" style="color: black; text-decoration: none">Computer Engineering</a></li>
						<li><a href="#" style="color: black; text-decoration: none">Electrical Engineering</a></li>
							<li><a href="#" style="color: black; text-decoration: none">Electronics Engineering</a></li>
								 <li><a href="#" style="color: black; text-decoration: none">Electronics and Telecommunication (EXTC)</a></li>
								 	<li><a href="#" style="color: black; text-decoration: none">Information Technology (IT)</a></li>
										<li><a href="#" style="color: black; text-decoration: none">Instrumentation Engineering</a></li>
											<li><a href="#" style="color: black; text-decoration: none">Mechanical Engineering</a></li>
												<li><a href="#" style="color: black; text-decoration: none">Production Engineering</a></li>
						
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>Third Year (TE) Question Papers - Semester 5 and 6:<b></font></p>
	<li><a href="#" style="color: black; text-decoration: none">Automobile Engineering </a></li>
		<li><a href="#" style="color: black; text-decoration: none">Bio-Medical Engineering</a></li>
			<li><a href="#" style="color: black; text-decoration: none">Chemical Engineering</a></li>
				<li><a href="#" style="color: black; text-decoration: none">Civil Engineering</a></li>
					<li><a href="#" style="color: black; text-decoration: none">Computer Engineering</a></li>
						<li><a href="#" style="color: black; text-decoration: none">Electrical Engineering</a></li>
							<li><a href="#" style="color: black; text-decoration: none">Electronics Engineering</a></li>
								 <li><a href="#" style="color: black; text-decoration: none">Electronics and Telecommunication (EXTC)</a></li>
								 	<li><a href="#" style="color: black; text-decoration: none">Information Technology (IT)</a></li>
										<li><a href="#" style="color: black; text-decoration: none">Instrumentation Engineering</a></li>
											<li><a href="#" style="color: black; text-decoration: none">Mechanical Engineering</a></li>
												<li><a href="#" style="color: black; text-decoration: none">Production Engineering</a></li>
						
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>Fourth Year (BE) Question Papers - Semester 7 and 8:<b></font></p>
	<li><a href="#" style="color: black; text-decoration: none">Automobile Engineering </a></li>
		<li><a href="#" style="color: black; text-decoration: none">Bio-Medical Engineering</a></li>
			<li><a href="#" style="color: black; text-decoration: none">Chemical Engineering</a></li>
				<li><a href="#" style="color: black; text-decoration: none">Civil Engineering</a></li>
					<li><a href="#" style="color: black; text-decoration: none">Computer Engineering</a></li>
						<li><a href="#" style="color: black; text-decoration: none">Electrical Engineering</a></li>
							<li><a href="#" style="color: black; text-decoration: none">Electronics Engineering</a></li>
								 <li><a href="#" style="color: black; text-decoration: none">Electronics and Telecommunication (EXTC)</a></li>
								 	<li><a href="#" style="color: black; text-decoration: none">Information Technology (IT)</a></li>
										<li><a href="#" style="color: black; text-decoration: none">Instrumentation Engineering</a></li>
											<li><a href="#" style="color: black; text-decoration: none">Mechanical Engineering</a></li>
												<li><a href="#" style="color: black; text-decoration: none">Production Engineering</a></li>
						
</div>
	
<div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>