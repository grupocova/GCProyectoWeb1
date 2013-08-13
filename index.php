<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EPG | Escuela de Posgrado</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-glyphicons.css" />
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


<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/holder.js"></script>

</body>
</html>
