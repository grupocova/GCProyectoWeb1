
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="#">Escuela De Posgrado</a>
    
    <ul class="nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="#">Campus Virtual</a></li>
      <li><a href="#">Mapa del Sitio</a></li>
    </ul>
    <!--<form class="navbar-search pull-right">
    <input type="text" class="search-query" placeholder="search" /> 
    </form> -->
    <ul class="nav pull-right">
      <li><a href="#" id="ico_face">Facebook</a></li>
      <li><a href="#" id="ico_twit">Twitter</a></li>
      <li><a href="#" id="ico_you">Youtube</a></li>
      <li><a href="#" id="ico_goo">Google</a></li>
      
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> ES <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">English</a></li>
          <li><a href="#">Portugues</a></li>
          <li><a href="#">Italiano</a></li>
        </ul>
      </li>
    </ul>
    
  </div>
  
  
  <div class="row-fluid">
  <div class="span9">
    <div> 
      <a class="pull-left" href="#">
        <img class="media-object" data-src="holder.js/200x110">
      </a>
    </div> 
  </div>
  <div class="span3">
    <h6 class="conthead2">Lima, 16 de Abril del 2013</h6><br /><br />
    <form class="form-search conthead2">
      <div class="input-append">
        <input type="text" class="span7 search-query">
        <button type="submit" class="btn">Search</button>
      </div>
    </form>
  </div>
  </div>
  
  <div class="row-fluid">
  <div class="span12">
    <ul class="nav nav-pills">
    <?php
	  $consulta1 = mysql_query ('select id,titulo from bdwebcova.contenido where orden="1"', $conexion);
	  $nfilas1=mysql_num_rows ($consulta1);
	  
	  if($nfilas1>0)
	  {
		  for ($i=0; $i<$nfilas1; $i++)
		{
			$fila1 = mysql_fetch_array ($consulta1);
			print '<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$fila1['titulo'].'<b class="caret"></b></a>
					<ul class="dropdown-menu">
					  <li><a href="#">Campus Virtual</a></li>
					  <li><a href="#">Mapa del Sitio</a></li>
					</ul>
				   </li>';
		}
	  }
    ?>

    </ul>
 </div>
 </div>
  
</div>


