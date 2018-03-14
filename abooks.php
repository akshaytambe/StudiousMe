<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<html>
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
  style="float:left;width:600px;height:120px;"></a>

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

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\books.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b>BOOK DATABASE<b></font></p>
</div>
<div style="background-color:white; color:black; padding:20px; margin-top:10px; width:1275px; height:auto">
<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>BOOK ID</th>
		<th>BOOK IMAGE</th>
		<th>BOOK NAME</th>
		<th>AUTHOR</th>
		<th>PUBLICATION</th>
		<th>DELETE BOOK</th>
   </tr>
   <tr>
 <?php
 mysql_connect("localhost","root");
 mysql_select_db("library");
   $query = "select * from book";
   $run = mysql_query($query);
 while(($row=mysql_fetch_array($run)))
 {
	$book_id = $row[0];
	$book_name = $row[1];
	$author=$row[2];
	$pub = $row[3];
	$branch = $row[4];
	$image=$row[6];
 ?>
  <center><td><center><?php echo $book_id ;?></center></td>
  <td><center><img src="<?php echo $image; ?>" width="200" height="250"></center></td>
  <td><center><?php echo $book_name ;?></center></td>
  <td><center><?php echo $author; ?></center></td>
  <td><center><?php echo $pub; ?></center></td>
  <td><center><a href='deletebook.php?del=<?php echo $book_id;?>' style="color: blue">Delete</center></td>
 </tr>
 <?php } ?>
 </table>
<br>
 </div>
 
 <div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
 </div>
</body>
</html>