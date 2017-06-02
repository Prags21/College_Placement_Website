<?php
include 'connect_to_database.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['e_id'])) { // if already login
   header("location: home.php"); // send to home page
   exit; 
}

?>
<html>
<head></head>
<body>
<form action = "a.php" method = "post">
Username: <input type="text" name="e_id" /><br />
Password: <input type="password" name="password" /><br />
<input type = "submit" name="submit" value="login" />
</form>
</body>
</html>