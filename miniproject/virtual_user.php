<?php
session_start();
if (!isset($_SESSION['Fname'])) {
	header("location:Register.php");
}
if (!isset($_SESSION['licenceno'])) {
	header("location:Register.php");
}
if (!isset($_SESSION['username'])) {
	header("location:Register.php");
}
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: Login.php"); 
} 

?>