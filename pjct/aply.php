        <?php
	$con=mysqli_connect("localhost","root","","db");
	
	if(!$con)
	{
		die("Could not connect".mysqli_error($con));
	}
	else
	{

echo"yes....";
		$query = "SELECT name FROM company_details WHERE name="'.mysql$_POST['name'].'"";
$row1 = mysqli_fetch_array($query);       ?>                                                                                                                                                                                                                                                                                  <html>
<head>
<title>Apply</title>
</head>

<body bgcolor=  #f9e79f >
<h2 align="center"><u><font color="BLUE">Apply</u></h2>

<table align="CENTER" bgcolor="#f9e79f">
<form action="aply.php" method="post">
<tr>
<td><b>Company's Name :</b></td>
<td><input type="text" name="company" value=<?php echo $row1['name']; ?></td><br>
</tr>

<tr>
<td><b>Name :</b></td>
<td><input type="text" name="name" / ></td><br>
</tr>

<tr>
<td><b>Roll :</b></td>
<td><input type="number" name="roll" / ></td><br>
</tr>
<tr>
<td><b>Resume :</b></td>
<td><input type="img" name="cv"></td><br>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" VALUE="SUBMIT"></td>
<td> <button type="button">Reset</button> 
</tr>
</form>
</table>

</body>
</html>
