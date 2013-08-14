<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EPG | Escuela de Posgrado</title>

<!-- css bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-glyphicons.css" />

<!-- css amazingcarousel-slider -->
<link rel="stylesheet" type="text/css" href="amazing/css/initcarousel-1.css">
<link rel="stylesheet" type="text/css" href="amazing/css/initcarousel-2.css">

<!-- css evoslider -->
<link rel="Stylesheet" type="text/css" href="evoslider/css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="evoslider/css/default.css" /> 
<!-- css web -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<!-- header -->
<header class="wepg-header">
  <?php
     include('header.php') ?>
</header>

<!-- slider-->
<div class="contenido container">
 <?php 
     include('slider.php') ?>
</div>

<!-- principal -->
<div class=" contenido container" id="wepg-principal">
 <?php 
     include('principal.php') ?>
</div>

<!-- footer -->
<footer id="wepg-footer">
 <?php 
     include('footer.php') ?>
</footer>

<!-- js generales -->
<script src="js/jquery.js"></script>
<script src="js/holder.js"></script>
<!-- js bootstrap -->
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- js amazing carousel -->
<script src="amazing/js/amazingcarousel.js"></script>   
<script src="amazing/js/initcarousel-1.js"></script>
<script src="amazing/js/initcarousel-2.js"></script>
<!-- js evoslider -->
<script type="text/javascript" src="evoslider/js/jquery.evoslider.lite-1.1.0.js"></script>

<script type="text/javascript">
            
    $("#mySlider").evoSlider({
        mode: "slider",                  // Sets slider mode ("accordion", "slider", or "scroller")
        // width: 960,                         // The width of slider
        height: 360,                        // The height of slider
        slideSpace: 5,                      // The space between slides
    
        mouse: true,                        // Enables mousewheel scroll navigation
        keyboard: true,                     // Enables keyboard navigation (left and right arrows)
        speed: 500,                         // Slide transition speed in ms. (1s = 1000ms)
        easing: "swing",                    // Defines the easing effect mode
        loop: true,                         // Rotate slideshow
    
        autoplay: true,                     // Sets EvoSlider to play slideshow when initialized
        interval: 5000,                     // Slideshow interval time in ms
        pauseOnHover: true,                 // Pause slideshow if mouse over the slide
        pauseOnClick: true,                 // Stop slideshow if playing
        
        directionNav: true,                 // Shows directional navigation when initialized
        directionNavAutoHide: false,        // Shows directional navigation on hover and hide it when mouseout
    
        controlNav: true,                   // Enables control navigation
        controlNavAutoHide: false           // Shows control navigation on mouseover and hide it when mouseout 
    });                                
    
</script>
</body>
</html>
