<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<html>
<head>
<title> Our Goals</title>
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
  </li>
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
 <p style="font-size:35px;text-align:center"><b>Our Goals<b></p>
 </div>
 
 <div id="content">
  <div id="contentright">
<ol style="font-size:17px;color:white;font-family:comic-sans;">
<li>To encourage students to challenge the regular thinking and create the spirit of enquiry, to generate free exchange of thoughts and ideas.<br></li>
<li>To encourage intellectual dialogue and cultural exchange and be at par with any international institution.<br></li>
<li>To improve the quality of education by promoting Faculty Upgradation Program.To offer a platform for research in every field.<br></li>
<li>To provide an environment that is conducive to evolving new knowledge and which encourages the assimilation, dissemination and generation of new ideas. <br></li>
<li>To create and quench the thirst for knowledge and understanding.<br></li>
<li>To nurture young minds in an environment that is non-judgmental, unbiased and open for discussions. <br></li>
<li>To create awareness about the responsibility and accountability that goes hand-in-hand with freedom.<br></li>
<li>To establish a leading center of imparting Quality Education in the field of Science, Engineering, Technology and Management with emphasis on:Ensuring that students learn the fundamental concepts in various disciplines.<br></li>
<li>Motivate students to apply the Scientific & Technological knowledge to develop problem-solving capabilities.<br></li>
<li>Making students aware of the societal and environmental needs with specific appreciation of the emerging global context.<br></li>
<li>Allowing informed and fair representation, substantive discussions, and decision-making that are timely and responsive.<br></li>
<li>Facilitating interdisciplinary and intra-disciplinary communication & collaboration across faculty and programs.<br></li>
<li>Balancing professional collegiality and trust with the requisite accountability.</p></li>
 </ol>
 </div>
 
 
 
 <div id="contentleft">
 <p> <img src="images/goals.jpg" alt="goals" style="position:relative;left:80px;top:50px;height:350px;width:350px;"></p>
 </div>
 </div>

 <div id="footer" style="margin-top:100px;">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
 </body>
 </html>