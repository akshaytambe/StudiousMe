<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>



<?php 
mysql_connect("localhost","root","");
mysql_select_db("library");

$confirm_id = $_GET['con'];

$query = "UPDATE  `library`.`issue` SET  `status` =  'YES' WHERE  id='$confirm_id'";
if(mysql_query($query))
	header("Location:astatus.php");
  
?>
