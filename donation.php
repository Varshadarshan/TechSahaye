<?php require("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Donation</title>
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
            <h1>Donation</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home </a></li>
                <li>Donation</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

<section class="contact-section">
    	<div class="auto-container">
        	<h2 style="margin-bottom: 30px;font-weight: bolder;">Donation</h2>
           
        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-12 col-sm-12 col-xs-12">
                	
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="#" id="contact-form">
                        
                        <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="name" id="name" value="" placeholder="Name*" required>
                            </div>
                        	<!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="email" name="email" id="email" value="" placeholder="Email Address*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="phone" id="phone" value="" placeholder="Phone*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="country" id="country" value="" placeholder="Country*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="state" id="state" value="" placeholder="State*" required>
                            </div>
                             <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="city" id="city" value="" placeholder="City*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="address" id="address" value="" placeholder="Address*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group form-column col-md-6">
                                <input type="text" name="postal-code" id="postal-code" value="" placeholder="Postal Code*" required>
                            </div>
                           
                            <!--Form Group-->
                            <div class="form-group form-column col-md-12">
                                <textarea name="message" id="message" placeholder="Your Message*" ></textarea>
                            </div>
                            <!--Form Group-->
                            <div class="form-group col-md-12">
                            <input value="Submit " type="submit" id="send" name="send" class="theme-btn btn-style-two">
                               <!-- <button type="submit"  class="theme-btn btn-style-two">Donate Now</button>-->
                            </div>
                        </form>
                        <div class="break"></div>
                    </div>
                    <!--Contact Form-->
                    
                </div>
                <!--Info Column-->
                
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