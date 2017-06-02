<?php
include 'connect_to_database.php'; //connect the connection page
  
if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
     echo"noooooo";
   header("Location: login.php");

   exit; 
}
//check if the username entered is in the database.
$test_query = "SELECT * FROM user_details WHERE email_id = '".$_POST['e_id']."'";
$query_result = mysqli_query($con,$test_query);
 
//conditions
if(mysqli_num_rows($query_result)==0) {
//if username entered not yet exists
    echo "The username you entered is invalid.";
}else {
//if exists, then extract the password.
    while($row_query = mysqli_fetch_array($query_result)) {
        // check if password are equal
        if($row_query['password']==$_POST['password']){
            $_SESSION['password'] = $_POST['password'];
		
?>
<a href="home.php">Home</a>
<?php            
            exit; 
        } else{ // if not
            echo "Invalid Password"; 
        }
    }
}
?>