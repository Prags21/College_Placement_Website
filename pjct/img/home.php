<?php
include 'connect_to_database.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['e_id'])) { //if not yet logged in
   header("Location: login.php");// send to login page
   exit;
} 
?>
<html>
<body>
Welcome <?php echo $_SESSION['e_id']; ?>,
 <a href="logout.php">logout</a> 
</body>
</html> 