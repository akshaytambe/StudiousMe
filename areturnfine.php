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
	<p ><font size='8px' color='#2266FF'><img src="images\adminreturn.jpg" alt="University"
  style="float:left;width:250px;height:150px;"><br><b>RETURN BOOK<b></font></p>
</div>

<<div style="background-color:white; color:black; padding:20px; margin-top:0px; width:1275px; height:auto">

<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>ROLL NO.</th>
		<th>BID</th>
		<th>BOOK NAME</th>
		<th>ISSUE DATE</th>
		<th>RETURN DATE</th>
		<th>FINE (IN RS.)</th>
		<th>RETURN BOOK</th>
   </tr>
   <tr>
 
  <?php
 mysql_connect("localhost","root");
 mysql_select_db("library");
   $query = mysql_query("SELECT * FROM  `issue` WHERE  `status` LIKE  'YES' ");
  while(($row2=mysql_fetch_array($query))){
   $issueid=$row2[0];
   $bookid=$row2[2];
   $rollno=$row2[1];
   $date = $row2[3];
   $today = date("Y-m-d");
   $diff = (abs(strtotime($today) - strtotime($date))/(60*60*24));
   if($diff > 7)
   {
     $now= strtotime("+7 day", strtotime($date));
	 $returndate= date("Y-m-d", $now);
	 $fndate=(abs(strtotime($today) - strtotime($date))/(60*60*24));
	 $days=$fndate-7;
	 $fine=$days*5;	 
   }
   else
   {
     $now= strtotime("+7 day", strtotime($date));
	 $returndate= date("Y-m-d", $now);
	 $fine=0;
   }
   $query2=mysql_query("SELECT * FROM  `book` WHERE  `bid` = $bookid ");
 while(($row=mysql_fetch_array($query2)))
 {
	$book_name = $row[1];
	
	

 ?> 
  <td><center><?php echo $rollno ;?></center></td>
  <td><center><?php echo $bookid; ?></center></td>
  <td><center><?php echo $book_name; ?></center></td>
  <td><center><?php echo $date; ?></center></td>
  <td><center><?php echo $returndate; ?></center></td>
  <td><center><?php echo $fine; ?></center></td>
  <td><center><a href='areturn.php?del=<?php echo $issueid;?>' style="color: blue">Return</center></td>
 </tr>
 <?php } }?>
 
 </table>
 </div>
</body>
</html>