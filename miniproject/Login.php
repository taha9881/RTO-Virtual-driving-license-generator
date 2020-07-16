<?php
include("retrive.php");
?>



<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS\Loginpage.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
  	<img src="files\logo1.png">
    <p class="sign" align="center">RTO LOGIN</p>
    <form class="form1" action="Login.php" method="POST">
      <input class="un " type="text" align="center" placeholder="Username" name="user" id="user">


      <input class="pass" type="password" align="center" placeholder="Password" name="pass" id="pass">

      <div class=" wrapper">
      <a href="welcome.php" class="button"> <button  type="submit"  value="Login" name="submit">Login</button> </a><br>
      <span ><h5 style="color:red;"><?php echo $error; ?></h5></span>
      </div>
      <p class="forgot" align="center"><a href="Register.php">New user? Sign-up</p>
            

   </div>
     
</body>

</html>