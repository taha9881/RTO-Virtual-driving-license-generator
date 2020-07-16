<?php
if (isset($_POST["sign"])) {
if(empty($_POST['Uname']) || empty($_POST['Fname']) || empty($_POST['dob']) || empty($_POST['Uemail']) || empty($_POST['gender']) || empty($_POST['phone']) || empty($_POST['pass'])){
$error = "every field is required";
}
else{


$Username=$_POST['Uname'];
$Name=$_POST['Fname'];
$DOB=$_POST['dob'];
$Email=$_POST['Uemail'];
$Gender=$_POST['gender'];
$Phone=$_POST['phone'];
$Pass=$_POST['pass'];



$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'mydatabase');
$u="SELECT * FROM `user_info` WHERE username='$Username' LIMIT 1";
$result=mysqli_query($conn,$u);
$user=mysqli_fetch_assoc($result);
if ($user) {
	if ($user['username']===$Username) {
	$msg="username already exist";

	}
}elseif (strlen($Username)==6){
	$run="INSERT INTO `user_info` ( `username`, `name`, `dobirth`, `email`, `gender`, `phone`, `password`) VALUES ('$Username', '$Name', '$DOB', '$Email', '$Gender', '$Phone', '$Pass')";

	mysqli_query($conn,$run) ;
	header("location: window.php");
}else{
	$error= "Please enter unique username of 6 character";
}
}
}
?>