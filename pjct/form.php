<?php
	$con=mysqli_connect("localhost","root","","or");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{
		echo "congrats!";

if(isset($_POST['name']))
	echo "name is set";
		
		$name = mysqli_real_escape_string($con,$_POST['name']);
            $stupic = mysqli_real_escape_string($con,$_POST['life']);
		$class = mysqli_real_escape_string($con,$_POST['class']);
		$roll_no = mysqli_real_escape_string($con,$_POST['roll']);
		$dob = mysqli_real_escape_string($con,$_POST['da']);
		$gender = mysqli_real_escape_string($con,$_POST['gender']);
         $college_name = mysqli_real_escape_string($con,$_POST['collname']);
	$f_name = mysqli_real_escape_string($con,$_POST['f-name']);

		$f_occ = mysqli_real_escape_string($con,$_POST['f-occ']);
		$m_name = mysqli_real_escape_string($con,$_POST['m-name']);
		$m_occ = mysqli_real_escape_string($con,$_POST['m-occ']);
		$addr = mysqli_real_escape_string($con,$_POST['address']);
		$email = mysqli_real_escape_string($con,$_POST['em']);
		$contact = mysqli_real_escape_string($con,$_POST['con']);
		$tenth = mysqli_real_escape_string($con,$_POST['pica']);
$twelth = mysqli_real_escape_string($con,$_POST['picb']);
$fe = mysqli_real_escape_string($con,$_POST['picc']);
$se = mysqli_real_escape_string($con,$_POST['picd']);
$te = mysqli_real_escape_string($con,$_POST['pice']);
$resum = mysqli_real_escape_string($con,$_POST['picf']);
$co_curr = mysqli_real_escape_string($con,$_POST['picg']);

$passport = mysqli_real_escape_string($con,$_POST['Passport']);

$higher_edu = mysqli_real_escape_string($con,$_POST['HigherEducation']);

	$sql = "INSERT INTO registration_details (name,student_pic,class,rollno,date_of_birth,gender,colln,fn,fc,mn,mc,address,email_id,cont,tenth,twelth,fem,sem,tem,resu,cocurr,passp,he) VALUES('$name','stupic','$class','$roll_no','$dob','$gender','$college_name','$f_name','$f_occ','$m_name','$m_occ','$addr','$email','$contact','$tenth','$twelth','$fe','$se','$te','$resum'
,'$co_curr','$passport','$higher_edu')";
		
		if(!mysqli_query($con,$sql)) 
		{
			die("error".mysqli_error($con));
		}
		echo "one record added";
		echo "<br>";
		echo " <a href = 'ss.php'> Display </a> ";
	}
	mysqli_close($con);
?>
