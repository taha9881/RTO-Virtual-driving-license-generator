<?php
session_start();
$error='';
	if (isset($_POST['sign'])) {
		if (!empty($_POST['fullname']) || !empty($_POST['licence'])) {

			$Fullname=$_POST['fullname'];
			$licence=$_POST['licence'];
			$username=$_SESSION['username'];

			$conn=mysqli_connect('localhost','root','');
			$db=mysqli_select_db($conn,"mydatabase");
			$que="SELECT * FROM `licenceno` WHERE licenceNo='$licence' AND name='$Fullname'";
			$result=mysqli_query($conn,$que);
			$row=mysqli_num_rows($result);
			if ($row) {
				$_SESSION['username']=$username;
				$_SESSION['Fname']=$Fullname;
				$_SESSION['licenceno']=$licence;
				header("location: virtual.php");
			}else{
				$error="Invalid name or licence Number!";
			}
		}else{
			$error="value are not defined";

		}
	}

if (!isset($_SESSION['username'])) {  
    header('location: Login.php'); 
} 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: Login.php"); 
} 
?> 