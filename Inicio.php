<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EPG | UPeU</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" type="text/css" href="css/prettify.css" />

<link rel="stylesheet" type="text/css" href="css/EBase.css" />

<title>Escuela de Posgrado</title>
</head>

<body>
<?php 
    include ('mysql\Conectar.php')?>

<!-- Header -->
<header class="header">

 <?php 
     include('header.php') ?>
</header>

<!-- slider-->
<div class="container">
 <?php 
     include('slider.php') ?>
</div>

<!-- Principal -->
<div class="container">
 <?php 
     include('principal.php') ?>
</div>

<!-- footer -->
<footer class="footer">
<div class="container ">
 <?php 
     include('footer.php') ?>
</div>
</footer>




  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-transition.js"></script>
  <script src="js/bootstrap-alert.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-scrollspy.js"></script>
  <script src="js/bootstrap-tab.js"></script>
  <script src="js/bootstrap-tooltip.js"></script>
  <script src="js/bootstrap-popover.js"></script>
  <script src="js/bootstrap-button.js"></script>
  <script src="js/bootstrap-collapse.js"></script>
  <script src="js/bootstrap-carousel.js"></script>
  <script src="js/bootstrap-typeahead.js"></script>
  <script src="js/bootstrap-affix.js"></script>
  <script src="js/holder.js"></script>
  <script src="js/prettify.js"></script>
  <script src="js/application.js"></script>
</body>
</html>