<?php
session_start();
$msg='';
$error='';
if (isset($_POST['submit'])) {

	if (empty($_POST['Uname'])||empty($_POST['Fname'])||empty($_POST['chalan'])||empty($_POST['pass']) || empty($_SESSION['username'])) {

		$error="Every field is required";
		
	}else{
		$username=$_POST['Uname'];
		$name=$_POST['Fname'];
		$Location=$_POST['Location'];
		$fine=$_POST['chalan'];
		$password=$_POST['pass'];
		$S_username=$_SESSION['username'];
		$today = date("d/m/Y");

		$conn=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($conn,'mydatabase');
		
		$q1="SELECT * FROM `user_info` WHERE `username`='$username' LIMIT 1";
		$q2="SELECT * FROM `user_info` WHERE `username`='$S_username'";
		$result1=mysqli_query($conn,$q1);
		$result2=mysqli_query($conn,$q2);

		$user1=mysqli_fetch_assoc($result1);
		$user2=mysqli_fetch_assoc($result2);

		if ($user1['name']==$name) {
			if ($user2['password']==$password) {
				$run="INSERT INTO `chalan`(`username`, `name`, `chalan`,`location`) VALUES ('$username','$name','$fine','$Location')";
				if(mysqli_query($conn,$run)){
					$msg="succes";
				}
				

			}else{
				$error="PASSWORD IS INCORRECT";
			}
		}else{
			$error="NAME IS INCORRECT, PLEASE WRITE SAME ";
		}
	}


}


?>