<?php include ('fineentry_php.php')

?>


<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="CSS\registerpage.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Chalan entry</title>
</head>

<body>
  <div class="main">
    <img src="files\logo1.png">
    <p class="sign" align="center">Chalan Entry System</p>
    <form class="form1" action="fineentry.php" method="POST">


<?php if(isset($msg)): ?>
   <span><h5 style="color:red; text-align: center;"> <?php echo  $msg;?> </h5> </span>
   <?php endif ?>
<?php if(isset($error)): ?>
   <span><h5 style="color:red; text-align: center;"> <?php echo  $error;?> </h5> </span>
   <?php endif ?>
      <input class="un " type="text" align="center" placeholder="username" name="Uname" required>
      


      <input class="un " type="text" align="center" placeholder="Enter name" name="Fname" required>


      <input class="un " type="number" align="center" name="chalan" placeholder="Fine" required>


      <input class="un " type="text" align="center" placeholder="Location" name="Location" required>
  

      
      <input class="pass" type="password" align="center" placeholder="Auth Password" name="pass" required><br>
       
      <div class="wrapper">
      <a href="done.html" class="button"> <button type="submit" class="signupbtn" name="submit" style="text-orientation: center;
                        border: none;
                        outline: none;
                        margin-left: 40%;
                        padding-top: 300px;
                        padding: 20px 20px;
                        border-radius: 50px;
                        color: #333;
                        background: #fff;
                        margin-bottom: 50px;
                        box-shadow: 0 3px 20px 0 #0000003b;
                        cursor: pointer;">Submit</button> </a>
      </div>

      
    
            
                
    </div>
     
</body>

</html>