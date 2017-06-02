 <?php
	$con=mysqli_connect("localhost","root","","db");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{

echo"yes....";
	

$name = mysqli_real_escape_string($con,$_POST['name']);
		$roll = mysqli_real_escape_string($con,$_POST['roll']);
		$resume = mysqli_real_escape_string($con,$_POST['cv']);
		
		$company = mysqli_real_escape_string($con,$_POST['company']);	
$sql = "INSERT INTO apply (name,roll,company,resume) VALUES('$name','$roll','$company','$resume')";
		
		if(!mysqli_query($con,$sql))
		{
			die("error".mysqli_error($con));
		}
		echo "one record added";
$nm=$_POST['company'];
$query = "SELECT name FROM apply WHERE company='".mysqli_real_escape_string($con,$nm)."'";
		$result = mysqli_query($con,$query);
?>
<head>
<title>COMPANY Wise Student LIST</title></head>
<body>
<?php while( $row = mysqli_fetch_array( $result )){
			?>
<p><?php echo($row['name'])?></p>
		<?php
		echo "<br>";
}}
?>