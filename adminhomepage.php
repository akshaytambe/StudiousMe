<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<!-- Javascript -->
<link rel="stylesheet" type="text/css" href="cssmain\admin.css">
<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
<!-- Javascript -->
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="adminhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:610px;height:120px;"></a>

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
<!-- Javascript -->

		<div id="examples_outer">

			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">Featured: <strong>VIT Campus</strong></div>
					<img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description">Featured: <strong>VIT Campus</strong></div>
					<img src="img/3.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description">Featured: <strong>VIT Campus</strong></div>
					<img src="img/4.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description">Featured: <strong>VIT Campus</strong></div>
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>
		<div class="c"></div>
<!-- Javascript -->
 
 <div class="up-right" style="background-color:#114466; color:black; padding:20px;margin-left:770px;margin-top:20px; width:500px;">

			<img src="cssmain\vit.jpg" alt="VIT" style="width:500px;height:150px;border:0">
			<center><p ><font size="6px"><b>WELCOME ADMIN...!!!</b></font></p><center>
			<center><p ><font size="4px">Library Timings: 9 A.M TO 6 P.M</p><br></center>
		
</div>

<div id="down " style="background-color:white; color:black; padding:20px;margin-top:150px; width: 1270px;">
	<p ><font size='6px' color='black'><b>OTHER WEBSITES<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:20px;margin-top:0px; width: 1270px;">
<a href="http://vidyalankar.org/">
<img src="cssmain\mainorg.jpg" alt="Classes" style="width:200px;height:150px;border:0">
</a>
</div>

<div id="down " style="background-color:white; color:black; padding:20px; margin-left:250px; margin-top:-205px; width: 200px;">
<center><a href="http://vit.edu.in/">
<img src="cssmain\college.jpg" alt="Classes" style="width:225px;height:150px;border:0">
</a></center>
</div>

<div id="down " style="background-color:white; color:black; padding:20px; margin-left:500px; margin-top:-205px; width: 250px;">
<center><a href="http://vsit.edu.in/">
<img src="cssmain\vsit.png" alt="Classes" style="width:250px;height:150px;border:0">
</a></center>
</div>

<div id="down " style="background-color:white; color:black; padding:20px; margin-left:775px; margin-top:-205px; width: 200px;">
<center><a href="http://www.vpt.edu.in/">
<img src="cssmain\vp.png" alt="Classes" style="width:250px;height:150px;border:0">
</a></center>
</div>

<div id="down " style="background-color:white; color:black; padding:20px; margin-left:1045px; margin-top:-205px; width: 150px;">
<center><a href="http://vidyalankarlive.com/">
<img src="cssmain\live.png" alt="Classes" style="width:225px;height:150px;border:0">
</a></center>
</div>

<div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>