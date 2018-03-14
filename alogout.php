<?php
session_start();
if(isset($_SESSION['user2'])){
session_destroy();
header("location: intro.html");
 }
?>
