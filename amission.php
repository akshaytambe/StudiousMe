<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<html>
<head>
<title> Mission, Vision, Values</title>
<link rel="stylesheet" type="text/css" href="cssmain\admin.css">
</head>
<style>
#top
{
height:60px;
width:72.75%;
float:right;
border:0px solid black;
padding:0px;
font-family:Gill Sans, Verdana;
text-shadow:2px 2px grey;
}

#content
{
 width:94%;
 height:501px;
 border:0px solid black;
 
}
#contentleft
{
width:20%
height:501px;
border:0px solid black;

}
#contentright
{
width:60%;
height:501px;
border:0px ;
float:right;
}
</style>
<body>
<div id="wrapper">
<div id="header">
<br>
<a href="adminhomepage.php" style="width:0px"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:610px;height:120px;"></a>
  
  <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="adminhomepage.php">HOME</a>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="abooks.php">Book Database</a></li>
      <li><a href="addbooks.php">Add Book</a></li>
      <li><a href="astatus.php">Issue Book</a></li>	
      <li><a href="areturnfine.php">Return Book</a></li>	  	  
	  <li><a href="user.php">Member Database</a></li>
      
    </ul>
  </li>

  <li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="agoals.php">Our Goals</a></li>
	  <li><a href="amission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="acontactus.php">Contact Us</a></li>
	</ul>
  </li>
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="alogout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
 </div>

 <hr>
 <div id="top">
 <p style="font-size:35px;text-align:center;">Mission, Vision & Values</p>
 </div>
 
 <div id="content">
  <div id="contentright">
<dl style="font-size:17px;color:white;font-family:verdana">
<b><i><u><dt style="font-size:20px;">Mission<br></dt></b></i></u>
<dd><ol>
    <li>To continue to endorse the Vidyalankar tradition of providing the best of services to the student community</li>
	<li>To build on our position of leadership with ethics by providing world-class education to our students</li>
	<li>To train technologists capable of thinking, and working strategically and operationally, across the regional and national boundaries</li>
	<li>To achieve this vision by providing a stimulating work environment that supports personal growth, individual contribution and team work.</li>
	</ol>
</dd>

<b><i><u><dt style="font-size:20px;">Vision<br></dt></u></i></b><br>
<dd>To provide the best of education to the student community through innovative and effective learning methodologies, constant improvement, cultivation of practical skills and unflinching commitment to academic quality.<br></dd>
<br>
<b><i><u><dt style="font-size:20px;">Core values<br></dt></u></i></b><br>
<dd>A set of core values from the guiding force at Vidyalankar. As an institution and as individuals we value:<br>
   <ol>
   <li>Honesty<br></li>
   <li>Excellence<br></li>
   <li>Commitment<br></li>
   <li>Integrity<br></li>
   </ol><br></dd>

</dl>
 </ol>
 </div>
 
 
 
 <div id="contentleft">
 <p> <img src="images/misvisval.jpg" alt="goals" style="position:relative;left:40px;top:50px;height:350px;width:400px;"></p>
 </div>
 </div>
 </div>
 <div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
 </body>
 </html>