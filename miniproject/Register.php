<?php include ('insert.php')

?>


<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="CSS\registerpage.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <img src="files\logo1.png">
    <p class="sign" align="center">Create a new RTO Account</p>
    <form class="form1" action="Register.php" method="POST">


<?php if(isset($msg)): ?>
   <span><h5 style="color:red; text-align: center;"> <?php echo  $msg;?> </h5> </span>
   <?php endif ?>
<?php if(isset($error)): ?>
   <span><h5 style="color:red; text-align: center;"> <?php echo  $error;?> </h5> </span>
   <?php endif ?>
      <input class="un " type="text" align="center" placeholder="username" name="Uname" required>
      


      <input class="un " type="text" align="center" placeholder="Enter name" name="Fname" required>


      <input class="un " type="date" align="center" name="dob" required>


      <input class="un " type="email" align="center" placeholder="Enter EmailID" name="Uemail" required>
      
     

      <div class="gender">
      <label >Gender:</label><br>

      <input type="radio" id="male" name="gender" value="m" required>
      <label for="male">Male(M)</label>

      <input type="radio" id="female" name="gender" value="f" required>
      <label for="female">Female(F)</label>

      <input type="radio" id="female" name="gender" value="f" required>
      <label for="female">Other(O)</label>
      </div>


      <input class="un " type="phone" align="center" placeholder="Enter Your number" name="phone" required>

      
      <input class="pass" type="password" align="center" placeholder="Password" name="pass" required><br>
       
      <div class="wrapper">
      <a href="windows.php" class="button"> <button type="submit" class="signupbtn" name="sign">Sign Up</button> </a>
      </div>

      
      
      <p class="forgot" align="center"><a href="Login.php">Already an user? sign in</p>
            
                
    </div>
     
</body>

</html>