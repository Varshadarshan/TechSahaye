<?php require("header.php");?>
<!doctype html>
<html lang="en">

<head>
    <title>Gallery</title>
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <!-------------------- gallery ----------------->
  <link rel="stylesheet" type="text/css" href="css_pirobox/demo3/style.css">
  <script type="text/javascript" src="js_pirobox/jquery-1.5.min.js"></script>
 <!--<script type="text/javascript" src="js_pirobox/jquery-migrate-3.0.0.js"></script>-->
<script type="text/javascript" src="js_pirobox/pirobox.min.js"></script>

<script type="text/javascript">

$(window).load(function() 
{

	$('.demo').piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.1, //background opacity
			slideShow : true, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox
	});
	 
});  
</script>
</head>

<body>
  <div class="page-wrapper">
    <!-- Header End --><div class="clearfix"></div>
    
  <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <h1>Gallery</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home </a></li>
                <li>Gallery</li>
            </ul>
      </div>
    </section>
    <!--End Page Title-->

 <!-- Main Content -->
    <div class="main-content" >
        <!-- About Us -->
        <section class="contact_us" style="padding-top:50px;">
    
      <div class="sectpad touch_bg" >
      <div class="container clearfix">
      

         <div class="col-md-3 col-sm-12">
<div class="single-product">                                                        
 <div class="product-img">
 <div class="box_img2"> <a href="images/gallery/1.jpg"  class="pirobox_single first"><img src="images/gallery/1.jpg" class="img-fluid" alt=""  border="0" align="middle" style="height:180px; width:100%;" /></a></div>
   </div>
   </div> 
  </div>     
           
           
            <div class="col-md-3 col-sm-12">
<div class="single-product">                                                        
 <div class="product-img">
 <div class="box_img2"> <a href="images/gallery/2.jpg"  class="pirobox_single first"><img src="images/gallery/2.jpg" class="img-fluid" alt=""  border="0" align="middle" style="height:180px; width:100%;"/></a></div>
   </div>
   </div> 
  </div> 
  
   <div class="col-md-3 col-sm-12">
<div class="single-product">                                                        
 <div class="product-img">
 <div class="box_img2"> <a href="images/gallery/3.jpg"  class="pirobox_single first"><img src="images/gallery/3.jpg" class="img-fluid" alt=""  border="0" align="middle" style="height:180px; width:100%;"/></a></div>
   </div>
   </div> 
  </div>  
  
   <div class="col-md-3 col-sm-12">
<div class="single-product">                                                        
 <div class="product-img">
 <div class="box_img2"> <a href="images/gallery/4.jpg"  class="pirobox_single first"><img src="images/gallery/4.jpg" class="img-fluid" alt=""  border="0" align="middle" style="height:180px; width:100%;"/></a></div>
   </div>
   </div> 
  </div> 

<div class="br"></div>  
  
                  

  

           
           
          
        
         
         
         
          
          
          
      </div>
      
   </div>
    
    </section>
        <!-- About Us -->
        <!-- services -->
        
        
    </div>
    <!-- Main Content End -->

   
   
   
    
   
  <!-- REVOLUTION JS FILES -->
    <!--<script src="revslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="revslider/js/jquery.themepunch.revolution.min.js"></script>  -->
   
    
    
</body>

</html>    
<?php require("footer.php");?>