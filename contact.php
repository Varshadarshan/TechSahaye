<?php require("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap2.css" rel="stylesheet">
<!--<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"> REVOLUTION SETTINGS STYLES -->
<!--<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"> REVOLUTION LAYERS STYLES -->
<!--<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"> REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  <!--  <div class="preloader"></div>-->
    
    <!-- Main Header-->
    
    <!--End Main Header -->
    
     <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home </a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

<section class="contact-section">
    	<div class="auto-container">
        	<h2 style="margin-bottom: 30px;font-weight: bolder;">You can drop us message for any querry</h2>
           
        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-6 col-sm-12 col-xs-12">
                	
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                        <!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="name" id="name" value="" placeholder="Name*" required>
                            </div>
                        	<!--Form Group-->
                            <div class="form-group">
                                <input type="email" name="email" id="email" value="" placeholder="Email Address*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" value="" placeholder="Phone*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message*" ></textarea>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-two">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!--Contact Form-->
                    
                </div>
                <!--Info Column-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column contact-form">
                    
          <h2 style="color:#333; margin-bottom:10px;"><b>Registered Office</b></h2>
                    	<ul>
                        
                        	<li><span> Address :</span>
                            ------ ------- ------- -------- -------- -------- ------</li><br>

                            <li><span>Phone :</span>+91-0000000000</li><br>

                            <li><span>email :</span>info@techsahaye.org</li>
                        </ul>
                        
                        <p>&nbsp;</p>
                        
                         
                    </div>
                </div>
            </div>
        </div>
    </section>



   


   



   
</div>  
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->

<!--Scroll to top-->



</body>
</html>
<?php require("footer.php");?>