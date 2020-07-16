<?php 
include('auth-form-php.php');
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	  <link rel="stylesheet" href="CSS\registerpage.css">
	  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	  <meta name="viewport" content="width=device-width, initial-scale=1" />
	  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<title>auth</title>
</head>
<body>
	<div class="main">
    <img src="files\logo1.png">
    <p class="sign" align="center">Authorization Data Entry</p>
    
    	

    	<span ><h5 style="color:red; text-align: center;"><?php echo $error; ?></h5></span>

		<span ><h5 style="color:red; text-align: center;"><?php echo $succes; ?></h5></span>
      <input class="un " type="text" align="center" placeholder="username" name="Uname" required>
      


      <input class="un " type="text" align="center" placeholder="Enter name" name="Fname" required>


      <input class="un " type="number" align="center" placeholder="Enter Licence No." name="LicenceNo" required>

      <input class="un " type="number" align="center" placeholder="Vehical Number" name="no_plate" required>

      
      <input class="pass" type="password" align="center" placeholder="Auth-Password" name="auth-password" required><br>
       
      <div class="wrapper">
      <a href="windows.php" class="button">
       <button type="submit" class="signupbtn" name="Create" style="
		text-orientation: center;
		border: none;
		outline: none;
		padding-top: 310px;
		padding: 20px 20px;
		border-radius: 50px;
		color: #333;
		margin-left: 100px;
		background: #fff;
		margin-bottom: 50px;
		box-shadow: 0 3px 20px 0 #0000003b;
		cursor: pointer;">Create Licence</button> </a>
		<a href="fineentry.php"><button type="submit" style="
			text-orientation: center;
		    border: 1px;
		    outline: none;
		    padding-top: 300px;
		    padding: 20px 20px;
		    border-radius: 50px;
		    color: #333;
		    margin-left: 10px;
		    background: #fff;
		    margin-bottom: 50px;
		    box-shadow: 0 3px 20px 0 #0000003b;
		    cursor: pointer;" name="fine">Fine Entry</button></a>
    <form class="form1" action="auth-form.php" method="POST">

      </div>
            
                
    </div>


</body>
</html>