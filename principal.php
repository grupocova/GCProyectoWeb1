<div class="row-fluid">
  <div class="span9">
    <div class="row-fluid">
    <!--Agenda------------------------------->
    <div class="span4 panel">
      <h4 class="well well-small">Agenda</h4>
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
    
    <!--Noticias----------------------------->
    <div class="span8 panel">
      <h4 class="well well-small">Noticias</h4>
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
    </div>
    
    <!--Anuncios----------------------------->
    <div class="row-fluid">
    <div class="span12 panel">
      <h4 class="well well-small">Anuncios</h4>
      <ul>
        <li>anuncio1</li>
        <li>anuncio2</li>
        <li>anuncio3</li>
      </ul>
    </div>
    </div>
  </div>
  
  <div class="span3">
    <!--Siguenos----------------------------->
    <div class="row-fluid">
    <div class="span12 panel">  
     <!--<h4 class="well well-small">Siguenos</h4> -->
     
     <div class="tabbable" style="margin-bottom: 18px;"> <!-- tabbable -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Ingresar</a></li>
          <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
          <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
        </ul>
        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
          <div class="tab-pane active" id="tab1">
            <ul>
              <li><a href>Registrar</a></li>
              <li><a href>Olvido su contraseña?</a></li>
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
    
    <!--Facebokk\----------------------------->
    <div class="row-fluid">
    <div class="span12 panel">
     <!--<h4 class="well well-small">Facebook</h4> --> 
     
     <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FEscuela-de-Posgrado%2F116599288362792&amp;width=500&amp;height=395&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=false&amp;appId=149531818553989" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:350px;" allowTransparency="true"></iframe>
    </div>
    </div>
  </div>
</div>      
