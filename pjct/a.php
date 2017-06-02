<?php
	$con=mysqli_connect("localhost","root","","db");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{     
		$result = mysqli_query($con,"SELECT * FROM company_details");
?>

<head>
<title>COMPANY LIST</title>
<link rel="stylesheet" type="text/css" href="../pjct\timeline.css"/>
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
<style>
.k{margin: 1em 0 0.5em 0;
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;  
	font-size: 32px;
	line-height: 36px;
	padding: 15px 15px 15px 15%;
	color: #355681;
	
}


.pj{
		margin: 1em 0 0.5em 0;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 28px;
	line-height: 40px;
	background: #35f684;
	background: rgba(53,86,129, 0.8);
	border: 1px solid #fff;
	padding: 5px 15px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;
}</style>
</head>

<body>
<div id="main">
<img src="../pjct/img\mitcoe.jpg" width="150px" height="170px"></img>
<img src="../pjct/img\logo.png"  position="absolute" left="160px" top="20px" width="240px" height="60px"></img>


<div id="b2">
<p>
<!--<img src="../pjct/img\job-seeker.jpg" top="0px" right="100px" height="70px" position="absolute">
</img>-->
<a href="../pjct\signin.html" class="myButton">Sign-in/Register</a></div>
<div id="horizontal">
     <ul>
          <li><a href="../pjct\Home_page.html">Home</a></li>
         <li><a href="../pjct\a.php">Companies</a></li>
         <li><a href="../pjct\contact.html">Contact</a></li>
         <li><a href="../pjct/about_us.html">About Us</a></li>
     </ul>
</div>
</div>
<p class="k"><img src="../pjct/img\bartoszkosowski.jpg" height="100px" width="600px"></img>COMPANY LIST</p>

<?php		
		while($row = mysqli_fetch_array( $result ))
			{?>
			
<div class="timeline">
<li class="centre">
    <i class="pointer"></i>
    <div class="unit">
      
      <!-- Company Detail -->
      <div class="storyUnit">
                <p class="pj"><?php echo($row['name'])?></p>
		<p><?php echo("<b>Eligibility:</b>".$row['no']) ?></p>
		<p><?php echo("<b>Backlogs:</b>".$row['bcklgs']) ?></p>
		<p><?php echo("<b>CTC:</b>".$row['ctc']) ?></p>
		<p><?php echo("<b>Rounds:</b>".$row['rounds']) ?></p>
		<p><?php echo("<b>Date:</b>".$row['date']) ?></p>
    </div>
                
       
      
      </div>
     
      <ol class="storyActions">
        <li><a href="../pjct\application.html"><button type="button" class="myButon" onclick="apply()">Apply</button></a>
</li>
        <li><button type="button">More</button>
</li>
      </ol>
      <!-- / Units -->
      
    </div>
  </li>

		<?php		
			}
			
	}
	mysqli_close($con);
?>


<script language="javascript">
function apply(){
alert("Redirecting to sign-in page")
}

</script>

</body>
</html>