<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("library");

$delete_id = $_GET['del'];

$query = "delete from user where id='$delete_id'";
if(mysql_query($query)){
echo "<script>alert('user has been deleted!')</script>";
header("location:user.php");
}
?>