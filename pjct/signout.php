<?php
 session_start();
 if (!isset($_SESSION['name'])) {
  header("Location: home_page.html");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: home.php");
 }
 
 if (isset($_GET['Sign-out'])) {
  unset($_SESSION['name']);
  session_unset();
  session_destroy();
  header("Location: home_page.html");
  exit;
 }