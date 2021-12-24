<?php 
 
session_start();
session_destroy(); //ngehancurin session
 
header("Location: ../../src/templates/login.php"); //lalu arahin ke login
 
?>