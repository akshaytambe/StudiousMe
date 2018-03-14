<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\admin.css">
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="adminhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
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

<div style="background-color:white; color:black; padding:20px;margin-left:175px;margin-top:20px; width:450px; height: 515px;border-radius: 20px 0px 0px 20px;">

<p style="color:black;text-align:center;font-size: 40px"><b>ADD BOOK</b></p>
<pre><form id='register' action='addbooks.php' method='post' accept-charset='UTF-8' style="font-size:20px;color:black">
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Book Name*    : </label><input type='text' name='name'  style="height: 22px;font-size: 18px;"/><br>
<label for='name' >Author*       : </label><input type='text' name='author'  style="height: 22px;font-size: 18px;"/><br>
<label for='name' >Publication*  : </label><input type='text' name='pub'  style="height: 22px;font-size: 18px;"/><br>
<label for='name' >Branch*       : </label><input type='text' name='brn'  style="height: 22px;font-size: 18px;"/><br>
<label for='name' >ISBN No*      : </label><input type='text' name='no'  style="height: 22px;font-size: 18px;"/><br>
<input type='submit' name='submit' value=""  style="border-style: none; background: url('images/add.jpg') no-repeat; width: 112px; height: 90px;float:right;"/>
</form>
</div>
<div style="background-color:white; color:black; padding:20px;margin-left:665px;margin-top:-555px; width:450px; height: 515px; border-radius: 0px 20px 20px 0px;">
<br><br><br>
<img src="images\addbook.png" alt="addbook" style="float:left;width:400px;height:400px;margin-left:30px;margin-top:-450px">
</div>
<div id="footer">
Copyright (TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>

<?php 
mysql_connect("localhost","root","");
mysql_select_db("library");
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $author = $_POST['author'];
	$pub = $_POST['pub'];
	$brn=$_POST['brn'];
	$no = $_POST['no'];
	
	if($name==''){
	echo "<script>alert('Please enter Book name!')</script>";
	exit();
   }
   
   if($author==''){
	echo "<script>alert('Please enter Author name!')</script>";
	exit();
   }
   
   if($pub==''){
	echo "<script>alert('Please enter Publication Details!')</script>";
	exit();
   }
   if($brn==''){
	echo "<script>alert('Please enter Branch Details!')</script>";
	exit();
   }
   if($no==''){
	echo "<script>alert('Please enter ISBN Number!')</script>";
	exit();
   }
   
  
   $query = "INSERT INTO `library`.`book` (`bid`, `bname`, `author`, `pub`, `bran`, `no`, `bimage`) VALUES (NULL, '$name', '$author', '$pub', '$brn', '$no', '')";
	if(mysql_query($query))
	 header("Location:success.php");
	 
    else{
    echo "<script>alert('Unsuccessful Operation...!!!')</script>";
     exit();
    }
   
 }  
?>