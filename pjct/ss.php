<?php
	$con=mysqli_connect("localhost","root","","or");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{

echo"yes....";
		$query = mysqli_query($con,"SELECT * FROM registration_details");
$row1 = mysqli_fetch_array($query);

?>	
<span>NAME:</span> <?php echo $row1['name']; ?><br>
<span>NAME:</span> <?php echo $row1['student_pic']; ?><br>
<span>NAME:</span> <?php echo $row1['class']; ?><br>
<span>NAME:</span> <?php echo $row1['rollno']; ?><br>
<span>NAME:</span> <?php echo $row1['date_of_birth']; ?><br>
<span>NAME:</span> <?php echo $row1['gender']; ?><br>
<span>NAME:</span> <?php echo $row1['colln']; ?><br>
<span>NAME:</span> <?php echo $row1['fn']; ?><br>
<span>NAME:</span> <?php echo $row1['fc']; ?><br>
<span>NAME:</span> <?php echo $row1['mn']; ?><br>
<span>NAME:</span> <?php echo $row1['mc']; ?><br>
<span>NAME:</span> <?php echo $row1['address']; ?><br>
<span>NAME:</span> <?php echo $row1['email_id']; ?><br>
<span>NAME:</span> <?php echo $row1['cont']; ?><br>
<span>NAME:</span> <?php echo $row1['tenth']; ?><br>
<span>NAME:</span> <?php echo $row1['twelth']; ?><br>
<span>NAME:</span> <?php echo $row1['fem']; ?><br>
<span>NAME:</span> <?php echo $row1['sem']; ?><br>
<span>NAME:</span> <?php echo $row1['tem']; ?><br>
<span>NAME:</span> <?php echo $row1['resu']; ?><br>
<span>NAME:</span> <?php echo $row1['cocurr']; ?><br>
<span>NAME:</span> <?php echo $row1['passp']; ?><br>
<span>NAME:</span> <?php echo $row1['he'];

mysqli_close($con); 
}
?>