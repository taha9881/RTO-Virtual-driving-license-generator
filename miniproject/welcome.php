<?php
include('welcome_user.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
    <title>Homepage</title> 
    <link rel="stylesheet" type="text/css"
                    href="CSS\welcome.css"> 
</head> 
<body> 
   <header>
	<div class="overlay">
        <h1>RTO Virtual Licence</h1>
        <h3>NO NEED OF CARRYNG HARDCOPY!<br>WHEN YOU HAVE SOFTCOPY!😎</h3>
        <p>  
                <a href="Login.php?logout='1'" style="color: red;"><button>
                    Click here to Logout </button> 
                </a> <br>
                <a href="quiz.php"><button style="
                        text-orientation: center;
                        border: none;
                        outline: none;
                        padding-top: 300px;
                        padding: 20px 20px;
                        border-radius: 50px;
                        color: #333;
                        background: #fff;
                        margin-bottom: 50px;
                        box-shadow: 0 3px 20px 0 #0000003b;
                        cursor: pointer;">Practice Yourself Before Paper</button></a>
        </p>
    </div>
         
	<br>
	</div>
</header>
    <div class="content"> 
        
        <?php  if (isset($_SESSION['username'])) : ?> 
            <p> 
                Welcome
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
                please enter your driving licence No. to create your virtual driving licence.
            </p>
           
        <?php endif ?> 
     </div>  

        <form class="form1" style="padding-left: 10px;" action="welcome.php" method="POST">
            		<span><h5 style="color:red; text-align: center;"><?php echo $error; ?></span><br><br>
            		<input class="un" type="text" placeholder="FullName" name="fullname" required><br>
            		
            		<input class="un" type="number" placeholder="Licence No." keyboard=number name="licence" required><br>
            		<div class="wrapper">
            		<input type="submit" style=" text-orientation: center;border: none;outline: none;padding-top: 150px; padding: 20px 50px;
                                                border-radius: 50px; color: #333; background: #fff; margin-bottom: 50px;
                                             box-shadow: 0 3px 20px 0 #0000003b;"     class="signupbtn" name="sign">
            		</div>
        </form>

            		
            	


    
</body> 
</html> 