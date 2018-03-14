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
	<p ><font size='8px' color='#2266FF'><img src="images\mu.png" alt="University"
  style="float:left;width:400px;height:150px;"> <b>MUMBAI UNIVERSITY<br>QUESTION PAPERS<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>First Year (FE) Question Papers - Semester 2:<b></font></p><br>
	<p ><font size='5px' color='green'><b>ENGINEERING DRAWING<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>	
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2008</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2008</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2002<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2006</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2005</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2004</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2004</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2003</a></th>
			</tr>
		</table>
	    <br><br>
		
	<p ><font size='5px' color='green'><b>STRUCTURED PROGRAMMING APPROACH<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>	
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2008</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2008</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2002<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2007</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2005</a></th> 				
				<th><a href="#" style="color: blue; text-decoration: none"> May 2005</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2004</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2004</a></th>
			</tr>
		</table>
	    <br><br>

	<p ><font size='5px' color='green'><b>APPLIED MATHEMATICS 2<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2008</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2008</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2007</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2002<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2007</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2005</a></th> 				
				<th><a href="#" style="color: blue; text-decoration: none"> May 2005</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2004</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2004</a></th>
			</tr>
		</table>
	    <br><br>

	<p ><font size='5px' color='green'><b>APPLIED PHYSICS 2<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
			</tr>
		</table>
	    <br><br>

	<p ><font size='5px' color='green'><b>APPLIED CHEMISTRY 2<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
			</tr>
		</table>
	    <br><br>

	<p ><font size='5px' color='green'><b>COMMUNICATION SKILLS<b></font></p><hr>
		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2012<b></font></p>		
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2014</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2013</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
			</tr>
		</table>

		<p ><font size='4px' color='black'><b>SYLLABUS SCHEME: R2007<b></font></p>
		<table>
			<tr>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2012</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2011</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2010</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2009</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> December 2008</a></th>
				<th><a href="#" style="color: blue; text-decoration: none"> May 2008</a></th>
			</tr>
		</table>
	    <br><br>
		
</div>

	
<div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>