<div class="row-fluid">
  <div class="span9">    
    <div class="row-fluid">
      <!--Agenda------------------------------->
      <div class="span4 panel">
        <div class="row-fluid">
          <div class="panel-title span12">
          <ul>
          <li class="title-icono"><span class="icono ico-agenda"></span></li>
          <li class="title-nombre">EVENTOS</li>
          <li class="title-item">ver mas</li>
          <li class="title-item">ver ant</li>
          </ul>
          </div>
        </div> 
        <div class="row-fluid"> 
          <div class="panel-content span12">
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
                            <a class="pull-left" href="#">
                              <div class="idate">
                                <h5 class="idate-mes">'.date("M",$fechaa).'</h5>
                                <div class="idate-dia">'.date("d",$fechaa).'</div>
                              </div>	  
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
        </div>
      </div>
      <!--Noticias----------------------------->
      <div class="span8 panel">
        <div class="row-fluid">
          <div class="panel-title span12">
          <ul>
          <li class="title-icono"><span class="icono ico-noticia"></span></li>
          <li class="title-nombre">NOTICIAS</li>
          <li class="title-item">ver mas</li>
          <li class="title-item">ver anteriores</li>
          </ul>
          </div>
        </div> 
        <div class="row-fluid"> 
          <div class="panel-content span12">      
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
                          <img class="media-object" data-src="holder.js/150x90" src="'.$fila["img"].'">
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
      </div>
      
    </div>
    
    <!--Anuncios----------------------------->
    <div class="row-fluid">
      <!--<h5 class="well well-small">Anuncios</h5>-->      
      <div id="myCarousel2" class="span12 panel carousel slide">    
        <div class="carousel-inner">
          <div class="item active contenedor  anuncios">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/220x130" alt="">
                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>                  
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/220x130" alt="">
                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>  
                  </div>
                </div>
              </li>
               <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/220x130" alt="">
                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>  
                  </div>
                </div>
              </li>
            </ul>  
          </div>
          <div class="item">
            <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img data-src="holder.js/220x150" alt="">
                <div class="caption">
                  <h5>Thumbnail label</h5>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>  
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img data-src="holder.js/220x150" alt="">
                <div class="caption">
                  <h5>Thumbnail label</h5>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>  
                </div>
              </div>
            </li>
             <li class="span4">
              <div class="thumbnail">
                <img data-src="holder.js/220x150" alt="">
                <div class="caption">
                  <h5>Thumbnail label</h5>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>  
                </div>
              </div>
            </li>
          </ul>          
          </div>  
        </div>
        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel2" data-slide="next">&rsaquo;</a>     
        
      </div>  
    </div>
    <!-- /Fin Anuncios----------------------------->    
  </div><!--Fin span9------------------------------>
  
  <div class="span3">
    <!--Siguenos----------------------------->
    <div class="row-fluid">
    <div class="span12">  
     <!--<h4 class="well well-small">Siguenos</h4> -->
     
     <div class="tabbable" style="margin-bottom: 18px;"> <!-- tabbable -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Campus Virtual</a></li>
          <li><a href="#tab2" data-toggle="tab">Sociales</a></li>
        </ul>
        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
          <div class="tab-pane active" id="tab1">
          	
            <form>
            <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span>
              <input class="span10" id="prependedInput" type="text" placeholder="Usuario">
            </div>
            <br>    
            <div class="input-prepend">
              <span class="add-on"><i class="icon-lock"></i></span>
              <input class="span10" id="prependedInput" type="password" placeholder="Contraseña">
            </div>             
             <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox"> Recordarme
                </label>
                <button type="submit" class="btn">Ingresar</button>
              </div>
            </div>       
            </form>
            <ul>
              <li><a href>Registrar</a></li>
              <li><a href>Olvido su contraseña?</a></li>
            </ul>
          </div>
          <div class="tab-pane" id="tab2">
            <p>Howdy, I'm in Section 2.</p>
          </div>          
        </div>
      </div> <!-- /tabbable -->
     
    </div>
    </div>
    
    <!--Facebokk\----------------------------->
    <div class="row-fluid">
    <div class="span12">
     <!--<h4 class="well well-small">Facebook</h4> -->      
     <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FEscuela-de-Posgrado%2F116599288362792&amp;width=500&amp;height=395&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=false&amp;appId=149531818553989" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:430px;" allowTransparency="true"></iframe>
    </div>
    </div>    
  </div><!--Fin span3-------------------------------->
  
</div><!--Fin row inicio----------------------------->      
