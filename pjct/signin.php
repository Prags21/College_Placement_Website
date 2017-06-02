<?php

		//if login fails or incorrect credentials.
			if(!isset($_POST['email_id'])){
					echo "You are not authorised to see this.";
					}
			else
			{
				session_start();
				$dbconnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'db');
$db= new mysqli(
$dbconnect['server'],
$dbconnect['user'],
$dbconnect['pass'],
$dbconnect['name']
);
echo "hey there";
		


	}
	mysqli_close($db);
?>