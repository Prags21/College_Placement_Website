<html>
<head>
<?php
ob_start();
 session_start();
$con=mysqli_connect("localhost","root","","db");
if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{     
if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }}
 // select loggedin users detail
 $res=mysqli_query("SELECT * FROM user_details WHERE email_id=".$_SESSION['name']);
 $uRow=mysqli_fetch_array($res);
?>
<title>Welcome - <?php echo $uRow['name']; ?></title>
<link type="text/css" href="../pjct\s.css" rel="stylesheet" />
<link type="text/css" href="../pjct\card.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../New Folder\all.css"/>
    <link rel="stylesheet" type="text/css" href="../New Folder\timeline.css"/>
       <link rel="stylesheet" type="text/css" href="../New Folder\normalize.css"/>
<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}


.mySlides {display:none;}
</style>
</head>
<body>
<div id="main">
<img src="../pjct/img\mitcoe.jpg" width="150px" height="170px"></img>
<img src="../pjct/img\logo.png"  position="absolute" left="160px" top="20px" width="240px" height="60px"></img>


<div id="b2">
<p>
<!--<img src="../pjct/img\job-seeker.jpg" top="0px" right="100px" height="70px" position="absolute">
</img>-->
<a href="../pjct\signout.php" class="myButton">Sign-out</a></div>
<div id="horizontal">
     <ul>
         <li><a href="../pjct\Home_page.html">Home</a></li>
         <li><a href="#">Companies</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="#">About Us</a></li>
     </ul>
</div>
</div>
</br>
<!--Slideshow-->
<div class="slides" style="max-height:100px;">

<img class="mySlides" src="../pjct/img\P1.jpg" style="width:100%" height:"400px">
<img class="mySlides" src="../pjct/img\P2.jpg" style="width:100%" height:"400px">

</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
}
</script>
<div id="mainbox">
<div id="card">
  <header>
  <h1>Resources</h1></header>
  <ul>
<li>hgk</li>
<li>gfyf</li>
</ul>
</div>
<div id="card">
  
  <h1>Tips</h1>
   <ul>
<li>hgk</li>
<li>gfyf</li>
</ul></div>
<div id="card">
  
  <h1>News</h1>
   <ul>
<li>hgk</li>
<li>gfyf</li>
</ul></div></div>
</body>
</html>
<?php ob_end_flush(); ?>