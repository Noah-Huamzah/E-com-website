<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Commerce-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
      
        <link href="css/style.css" rel="stylesheet">
       
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
   
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
         <img align="center" src="" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>Innovacio Technology</p>
				    <p>36, Beckbagan Row</p>
				    <p>Kolkata, India</p>
				    <p>Phone:</p>
				    <p>Email: hello@innovaciotech.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On;</h2>
                   <a href="http:www.facebook.com/innovaciotech" target="_blank"><img src="img/FBc792c132eb020a6486f8d3755dcbe3dd.jpg" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                  
               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>