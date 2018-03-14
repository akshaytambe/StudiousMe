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
	<p ><font size='8px' color='#2266FF'><img src="images\books.jpg" alt="University"
  style="float:left;width:200px;height:150px;"> <b>BOOKS INFO<b></font></p>
</div>

<div style="background-color:white; color:black; padding:20px; margin-top:10px; width:1275px; height:auto">
<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>BOOK ID</th>
		<th>BOOK IMAGE</th>
		<th>BOOK NAME</th>
		<th>AUTHOR</th>
		<th>PUBLICATION</th>
		<th>ACTION</th>
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
  <td><center><a href='take.php?book=<?php echo $book_id;?>' style="color: blue">Issue</center></td>
 </tr>
 <?php } ?>
 </table>
 </div>
 <div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
 </div>
</body>
</html>