<?php
session_start();
$succes='';
$error='';
if(isset($_POST["Create"])){

	if (empty($_POST['Uname']) ||empty($_POST['Fname']) ||empty($_POST['LicenceNo']) ||empty($_POST['auth-password']) || empty($_SESSION['username'])) {
		$error="every field is required";
	}
	else{

		$username=$_POST['Uname'];
		$name=$_POST['Fname'];
		$LicenceNo=$_POST['LicenceNo'];
		$S_username=$_SESSION['username'];
		$password=$_POST['auth-password'];
		$number=$_POST['no_plate'];
		
		$conn=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($conn,'mydatabase');
		$u="SELECT * FROM `user_info` WHERE username='$username'";
		$result=mysqli_query($conn,$u);
		$u1="SELECT * FROM `licenceno` WHERE username='$username'";
		$result1=mysqli_query($conn,$u1);
		$u2="SELECT * FROM `user_info` WHERE username='$S_username' LIMIT 1";
		$result2=mysqli_query($conn,$u2);
		$user=mysqli_fetch_assoc($result);
		$user1=mysqli_fetch_assoc($result1);
		$user2=mysqli_fetch_assoc($result2);
		if ($user) {
			if ($user['username']==$username) {
				if (!$user1['username']==$username) {
					if($user2['password']==$password){

					$run="INSERT INTO `licenceno`(`username`, `name`, `licenceNo`, `no_plate` ) VALUES ('$username','$name','$LicenceNo', '$number')";
					mysqli_query($conn,$run);
					$succes="Data INSERTED succesfully";
					
			}else{
				$error="Your Auth_Password is incorrect" ;
				}
			}else{
				$error="Data is already present for the username:-".$username;
			}		
		}
		}else{
				$error="No account has been created for the username= ".$username;
			}

	}
}



?>