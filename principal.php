<div class="row">      	
  <!--AGENDA----------------------------------------------------->
  <div class="span3 panel ">
    <div class="bs-docs-example">
      <h4 class="well well-small">Agenda</h4>              
    </div>
    <?php
    $consultaa = mysql_query ("select titulo, descrip, fecha from bdwebcova.agenda", $conexion);
    $nfilasa=mysql_num_rows ($consultaa);
    
    if($nfilasa>0)
    {
        for ($i=0; $i<$nfilasa; $i++)
      {
          $filaa = mysql_fetch_array ($consultaa);
          $fechaa= strtotime($filaa["fecha"]);
           print '<ul class="media-list">
        <li class="media">
          <a class="pull-left" href="date("m",$fechaa)#">
            <!--<img class="media-object" data-src="holder.js/64x64">-->	  
            <span class="label">'.date("M",$fechaa).'</span><br>
            <span class="label">'.date("d",$fechaa).'</span>
          </a>
          <div class="media-body">
            <h4 class="media-heading">'.$filaa["titulo"].'</h4>
            <p>'.$filaa["descrip"].'</p>
          </div>
        </li>
    </ul>';
      }			
    } 
    ?>
  </div> 
  <!--FIN AGENDA------------------------------------------------->
        
  <!--NOTICIAS--------------------------------------------------->
  <div class="span6 panel">
    <div>
      <h4 class="well well-small">Noticias</h4>
    </div>            
	<?php          
      $consulta = mysql_query ("select titulo, resumen, texto, img from bdwebcova.noticias", $conexion);
      $nfilas = mysql_num_rows ($consulta);		
      if($nfilas>0)
      {
          for ($i=0; $i<$nfilas; $i++)
          {
              $fila = mysql_fetch_array ($consulta);
               print '<div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" data-src="holder.js/120x70" src="'.$fila["img"].'">
            </a>
            <div class="media-body">
              <h4 class="media-heading">'.$fila["titulo"].'</h4>
              <p>'.$fila["resumen"].'</p>
            </div>
          </div>';
          }
      }
      ?>                    
  </div>        
  <!--FIN NOTICIAS--------------------------------------------->
  
  <!--PANEL EXTRA------------------------------------------------->      
  <div class="span3">
    <div class="row"> 
    <div class="span3">
       <div class="tabbable" style="margin-bottom: 18px;">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Siguenos</a></li>
          <li><a href="#tab2" data-toggle="tab">Login</a></li>
          <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
        </ul>
        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
          <div class="tab-pane active" id="tab1">
            <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Google</a></li>
            </ul>
          </div>
          <div class="tab-pane" id="tab2">
            <p>Howdy, I'm in Section 2.</p>
          </div>
          <div class="tab-pane" id="tab3">
            <p>What up girl, this is Section 3.</p>
          </div>
        </div>
      </div> <!-- /tabbable --> 
    </div>
    </div>
    
    <div class="row">
  	<div class="span3 panel">
      <h4 class="well well-small">Facebook</h4>
    </div>
    </div>
  </div> 
  <!--FIN PANEL EXTRA------------------------------------------------->
</div>
<!-------------------------------------------------------------------->  
<!-------------------------------------------------------------------->

<div class="row">
  <!--ANUNCIOS-------------------------------------------------------->
  <div class="span12 panel">
  <ul class="anuncios">
  <li><a href><img data-src="holder.js/250x140" class="img-polaroid"><a></li>
  <li><a href><img data-src="holder.js/250x140" class="img-polaroid"><a></li>
  <li><a href><img data-src="holder.js/250x140" class="img-polaroid"><a></li>
  </ul>
  </div>
   <!-- FIN ANUNCIOS-------------------------------------------------->
</div>