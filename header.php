<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      
      <a class="brand" href="#">EPG - UPeU</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#">Campus Virtual</a></li>
          <li><a href="#">Mapa del Sitio</a></li>
        </ul>
        <ul class="nav pull-right">
           <li>
          <!--<form class="form-search conthead2">
            <div class="input-append">
              <input type="text" class="span2 search-query">
              <button type="submit" class="btn">Search</button>
            </div>
          </form>--> 
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Buscar">
          </form>
          </li>
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
      
    </div>
  </div>
</div>


<div class="container">
<!--Logo, buscador, fecha--------------------------------->  
  <div class="row-fluid logo">
    <div class="span9">
      <div> 
        <a class="pull-left" href="#">
          <img class="media-object" src="img/upg_logo.png" data-src="holder.js/270x110">
        </a>
      </div> 
    </div>
    <div class="span3 icosocial">
      <h5 class="conthead2"><i class="icon-calendar"></i> Lima, 16 de Abril del 2013</h5><br /><br />  <br />
      <ul>        
        <li><a href="#" id="gog"><span>Google +</span></a></li>
        <li><a href="#" id="you"><span>Youtube</span></a></li>
        <li><a href="#" id="twit"><span>Twitter</span></a></li>        
        <li><a href="#" id="face"><span>Facebook</span></a></li>        
      </ul>    
    </div>
  </div>
  <!--Fin Logo, buscador, fecha--------------------------------->  
</div>
<div class="navprin">
   <div class="container">    
     <div class="row-fluid">              
       <div class="span12"> 
       
     <div class="navbar navbar-inverse nav-just">
        <div class="navbar-inner"> 
                 
            <ul class="nav">
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
          <!--</div>-->
          </div>
          </div>
          
        </div>
      </div><!-- /.navbar -->
 </div>   
 </div>



