<?php
include('virtual_user.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/welcome.css">
    <title>virtual licence generator </title>
     <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
    </script> 
      
    <script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
    </script> 
</head>
<body>
<header>
    <div class="overlay">
        <h1>RTO Virtual Licence</h1>
        <h3>NO NEED OF CARRYNG HARDCOPY!<br>WHEN YOU HAVE SOFTCOPY!😎</h3>
        <p>  
                <a href="Login.php?logout='1'" style="color: red;"><button>
                    Click here to Logout </button> 
                </a> 
            </p> 
    <br>
    </div>
</header>
              <?php  if (isset($_SESSION['licenceno']) || isset($_SESSION['Fname']) || isset($_SESSION['username'])) : ?>
<center><h3 style="color: black;">WELCOME!<br> <strong><?php echo strtoupper($_SESSION['username']); ?></strong></h3></center>
<center><p><strong>Here it is your virtual driving licence:</strong><br> you can downlode it and use this licence as an official document keep it safe and secure. Our virtual portal is end-to-end encrypted:<br><strong>your information is secured</strong>, have a look at your first virtal licence document</p></center>

    <div id="html-content-holder" style="background-color: #F0F0F1;  
                color: black; width: 500px; height: auto; padding-left: 25px; margin-left: 500px; 
                padding-top: 10px;">
                <img src="files\satya.png" style="float: left;" width="60px" height="45px">
              <img src="files\U.png" width="350px" height="45px">
              <img src="files\mmvd.png" width="60px" height="45px" >

DL No :<strong><?php echo $_SESSION['licenceno']; ?></strong>
<h5 style="float: right;">DOI :<strong>XX-XX-XXXX</strong></h5>
<h5>Scan for verification <p style="float: right; font-size: 10px;">FORM 7<br>RULE16(2)</p></h5><br>
<img src="files\qrcode.png" style="float: left;" width="auto" height="60px" >
        <img src="files\default.png" style="padding-left: 350px;" height="60px" width="auto"><br>
        Name   :<strong><?php echo $_SESSION['Fname'];  ?></strong> <br>

            <h5 style="float: left;">Signature & <br>ID of Issuing Authority: MH30</h5><img src="files\signature.png" style="float: left;" height="20px" width="auto">
            <img src="files\signature.png" style="float: right;" height="20px" width="auto">
        
           <h5 style="float: "> Signature /Thumb<br> Impression of Holder:</h5>
        
</div>
<?php endif ?>
<br><br>
<div class="Preview_btn">
<input id="btn-Preview-Image" type="button"
                value="Preview" />  
        
    <a id="btn-Convert-Html2Image" href="#"> 
        Download 
    </a> 
</div>  
    <br/> 
      
    <h3 style="text-align: center">Preview :</h3> 
      
    <div id="previewImage"></div> 
      
    <script> 
        $(document).ready(function() { 
          
            // Global variable 
            var element = $("#html-content-holder");  
          
            // Global variable 
            var getCanvas;  
  
            $("#btn-Preview-Image").on('click', function() { 
                html2canvas(element, { 
                    onrendered: function(canvas) { 
                        $("#previewImage").append(canvas); 
                        getCanvas = canvas; 
                    } 
                }); 
            }); 
  
            $("#btn-Convert-Html2Image").on('click', function() { 
                var imgageData =  
                    getCanvas.toDataURL("image/png"); 
              
                // Now browser starts downloading  
                // it instead of just showing it 
                var newData = imgageData.replace( 
                /^data:image\/png/, "data:application/octet-stream"); 
              
                $("#btn-Convert-Html2Image").attr( 
                "download", "virtualDL.png").attr( 
                "href", newData); 
            }); 
        }); 
    </script>

</body>
</html>