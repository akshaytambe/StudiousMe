<?php
session_Start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<style>
body {
    background-image: url("library.jpg");
	background-size: 1366px 768px;
    background-repeat: no-repeat;
}
h1 {
    font-family: Gill Sans, Verdana;
	font-size: 60px;
	color: #2266FF;
}
p{
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
#header {
    background-color:white;
    color:white;
    text-align:left;
	padding: 5px;
}

#footer {
    color:black;
    clear:both;
    text-align:center;
    padding:5px;
    margin-top: 30px;	
}

</style>
</head>
<body>
<div id="header">
<pre><h1><img src="images\librarysymbol.gif" alt="Logo"
  style="float:left;width:100px;height:100px;border-radius: 20px 20px 20px 20px;"> STUDIOUS ME</h1></pre>
</div>
<div style="background-color:white; color:black; padding:20px;margin-left:200px;margin-top:20px; width:500px; height: 400px;border-radius: 20px 20px 20px 20px;">

<p style="color:black;text-align:center;font-size: 30px"><b>USER LOGIN</b></p>
<p style="color:black;text-align:center;font-size: 24px">Sign in to continue to Library</p>
<pre><form name="input" method="post" style="font-size:24px;color:black" >
  USERNAME : <input type="text" name="user" style="height: 28px;font-size: 24px;"><br>
  PASSWORD : <input type="password" name="pwd" style="height: 28px;font-size: 24px;">
  <br><br>
<input type="submit" value="" name="login" style="border-style: none; background: url('images/signin.jpg') no-repeat; width: 134px; height: 53px;float:right;">
</form>
</div>
<div id="footer">
Copyright (TM) 2014 | Team Ozil 11
</div>

</body>

</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("library");

if(isset($_POST['login'])){

$password = $_POST['pwd'];
$uid = $_POST['user'];

$check_user = "SELECT * 
FROM  `user` 
WHERE  `rno` LIKE  '$uid'
AND  `pass` LIKE  '$password'";
$run = mysql_query($check_user);
$count=mysql_num_rows($run);
$row=mysql_fetch_array($run);
$uname=$row[1];
if($count==1){

$_SESSION["user"]="YES";
$_SESSION["user"]=$_POST["user"];
$_SESSION["name"]=$uname;
$page="Location:userhomepage.php";
header($page);
exit();
}
else{
echo "<script>alert('Email or password is incorrect!')</script>";
}}
