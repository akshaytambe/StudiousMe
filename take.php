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
$query2 = mysql_query("SELECT * FROM  `issue` WHERE  `rollno` LIKE  '$usernm'");
$nbook=mysql_num_rows($query2);
error_reporting(0);
$date=date('Y-m-d');
$row=mysql_fetch_array($date);
if($nbook>=2){
header("Location:sorry.php");
}
else{
$query=mysql_query("INSERT INTO `library`.`issue` (`id`, `rollno`, `bid`, `date`, `fine`) VALUES (NULL, '$usernm', '$id', '$date', '0')");
if($query)
{
header("Location:receipt.php");
echo "<script>alert('Issued')</script>";
}
}

?>

