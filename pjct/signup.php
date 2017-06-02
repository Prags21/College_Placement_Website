<?php
	$con=mysqli_connect("localhost","root","","db");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{
		echo "congrats!";
		
		$email = mysqli_real_escape_string($con,$_POST['email_id']);
		$name = mysqli_real_escape_string($con,$_POST['name']);
		
		$password = mysqli_real_escape_string($con,$_POST['password']);
		
		$sql = "INSERT INTO user_details (email_id,name,password) VALUES('$email','$name','$password')";
		
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

