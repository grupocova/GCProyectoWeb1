     <div class="row show-grid">
      	
        <!--AGENDA-->
        <div class="span3 panel ">
          <div class="bs-docs-example">
              <h3 class="well well-small">Agenda</h3>              
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
        <!--NOTICIAS-->
        <div class="span6 panel">
        	<div>
              <h3 class="well well-small">Noticias</h3>
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
        <?php
		 
        ?>    
          <!--  <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/120x70">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
              </div>
            </div>
               
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/120x70">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
              </div>
            </div>-->
       
       
        </div>        
        <!--FIN NOTICIAS-->
        
        
        <div class="span3">
        <div class="row">
        <div class="span3 panel">
        	<h3 class="well well-small">Siguenos</h3>
            <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Google</a></li>
            </ul>
        	</div>
        </div>
        </div>
        
        <div class="row">
        <div class="span3 panel">
        <h3 class="well well-small">facebook</h3>
        </div>
        </div>
    </div>