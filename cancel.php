<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
$id=$_GET["book"];
$usernm = $_SESSION['user'];
$query2 = mysql_query("SELECT * 
FROM  `issue` 
WHERE  `rollno` =  '$usernm'
AND  `bid` =  '$id'");
$row=mysql_fetch_array($query2);
$status=$row[5];
$del=$row[0];
if($status=='YES'){
  header("Location:postalready.php");
  echo "You have taken book from library";
}else{
$que=mysql_query("DELETE FROM `library`.`issue` WHERE `issue`.`id` = $del");
if($que){
echo "Cancelled";
header("Location:postcancel.php");
} }
?>