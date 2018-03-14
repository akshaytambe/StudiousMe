<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$usernm=$_SESSION['user'];
?>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\receipt.css">
</head>
<body>
<div id="wrapper">

<center><h1>RECEIPT<br></h1></center>
<center><p style="color:black; font-size: 30px;"><b>(MY ISSUED BOOKS)</p></center> 
<hr>
<center><p style="color:black; font-size: 20px;"><b>USERID : <?php echo $usernm;  ?></p></center> 
<hr><br>
<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		
		<th>Book Image</th>
		<th>Book Name</th>
		<th>Author</th>
		<th>Publication</th>
		<th>Date of issue</th>
   </tr>
   <tr>
 <?php
 mysql_connect("localhost","root");
 mysql_select_db("library");
   $query = mysql_query("SELECT * FROM  `issue` WHERE  `rollno` LIKE  '$usernm'");
  while(($row2=mysql_fetch_array($query))){
   $bookid=$row2[2];
   $query2=mysql_query("SELECT * FROM  `book` WHERE  `bid` = $bookid ");
 while(($row=mysql_fetch_array($query2)))
 {
	$book_name = $row[1];
	$author=$row[2];
	$pub = $row[3];
	$date = $row2[3];
	$fine=$row2[4];
	$image=$row[6];

 ?>
  <td><center><img src="<?php echo $image; ?>" width="200" height="250"></center></td>  
  <td><center><?php echo $book_name ;?></center></td>
  <td><center><?php echo $author ;?></center></td>
  <td><center><?php echo $pub; ?></center></td>
  <td><center><?php echo $date; ?></center></td>
 </tr> 
 <?php } }?>
 </table>
 </div>
<a href="receiptpdf.php">
<img src="images\save.png" alt="SAVE" style="width:30px;height:30px;border:0;float:right">
</a>
 </div>
</body>
</html>