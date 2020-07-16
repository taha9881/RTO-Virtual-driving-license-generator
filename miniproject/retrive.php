<?php
session_start();
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['pass'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$user=$_POST['user'];
$pass=$_POST['pass'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "mydatabase");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM `user_info` WHERE password='$pass' AND username='$user'");
$rows = mysqli_num_rows($query);
if($rows == 1){
	if(strlen($user)==6){
$_SESSION['username']=$user;
header("Location: welcome.php"); // Redirecting to other page
}elseif (strlen($user)==8) {
	$_SESSION['username']=$user;
	header("Location: auth-form.php");
}
}
else
{
$error = "Username or Password is Invalid";
}
mysqli_close($conn); // Closing connection
}
}
?>