<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EPG | Escuela de Posgrado</title>

<!-- css bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-glyphicons.css" />

<!-- css amazingcarousel -->
<link rel="stylesheet" type="text/css" href="amcarousel/css/initcarousel-1.css">
<link rel="stylesheet" type="text/css" href="amcarousel/css/initcarousel-2.css">

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
<script src="amcarousel/js/amazingcarousel.js"></script>   
<script src="amcarousel/js/initcarousel-1.js"></script>
<script src="amcarousel/js/initcarousel-2.js"></script>
</body>
</html>
