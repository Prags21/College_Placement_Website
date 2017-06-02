<?php
	$con=mysqli_connect("localhost","root","","db");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{
		echo "congrats!";
		
		$name = mysqli_real_escape_string($con,$_POST['company_name']);
		$no = mysqli_real_escape_string($con,$_POST['eligibility']);
		$back = mysqli_real_escape_string($con,$_POST['backlog']);
		
		$ctc = mysqli_real_escape_string($con,$_POST['ctc']);
		$rounds = mysqli_real_escape_string($con,$_POST['rounds']);
		$date = mysqli_real_escape_string($con,$_POST['date']);
		$cmnt = mysqli_real_escape_string($con,$_POST['details']);

		$sql = "INSERT INTO company_details (name,no,bcklgs,ctc,rounds,date,cmnt) VALUES('$name','$no','$back','$ctc','$rounds','$date','$cmnt')";
		
		if(!mysqli_query($con,$sql))
		{
			die("error".mysqli_error($con));
		}
		echo "one record added";
		echo "<br>";
		echo " <a href = 'add.html'> HOME </a> ";
	}
	mysqli_close($con);
?>

