<!DOCTYPE html>
<html lang="en">
<head>
<title>America Airlines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="/index" id="logo">AirLines</a><span id="slogan">America Airlines</span></h1>
        <div class="right">
          <nav>
            <ul id="top_nav">
              <li><a href="/index"><img src="/images/img1.gif" alt=""></a></li>
              <li><a href="/contacto"><img src="/images/img2.gif" alt=""></a></li>
            </ul>
          </nav>
          <nav>
            <ul id="menu">
				<?php
					$idMenu_destinos='';
					$idMenu_index='';
					$idMenu_nosotros='';
					$idMenu_contacto='';
					switch($_PETICION->accion){
						case 'index';
							$idMenu_index='id="menu_active"';
						break;
						case 'destinos';
							$idMenu_destinos='id="menu_active"';
						break;
						case 'nosotros';
							$idMenu_nosotros='id="menu_active"';
						break;
						case 'contacto';
							$idMenu_contacto='id="menu_active"';
						break;
					}
					
				?>
              <li <? echo $idMenu_index; ?> ><a href="/index">Inicio</a></li>
              <li <? echo $idMenu_destinos; ?> ><a href="/destinos">Destinos</a></li>
              <li <? echo $idMenu_nosotros; ?> ><a href="/nosotros">Nosotros</a></li>
              <li <? echo $idMenu_contacto; ?> ><a href="/contacto">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">
  <div id="banner">
    <div class="text1"> Confort<span>Garantizado</span>
      
    </div>
  </div>
</div>
<div class="main">
  <section id="content">
    <article class="col1">
      <div class="pad_1">
        <h2>Plan de Vuelo</h2>
        <form id="form_1" action="#" method="post">
          <div class="wrapper pad_bot1">
            <div class="radio marg_right1">
              <input type="radio" name="name1">
               Redondo<br>
              </div>
            <div class="radio">
              <input type="radio" name="name1">
              Sencillo<br>
			</div>
          </div>
          <div class="wrapper"> Origen:
            <div class="bg">
              <input type="text" class="input input1" value="Ciudad o Aeropuerto" onBlur="if(this.value=='') this.value='Ciudad o Aeropuerto'" onFocus="if(this.value =='Ciudad o Aeropuerto' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Destino:
            <div class="bg">
              <input type="text" class="input input1" value="Ciudad o Aeropuerto" onBlur="if(this.value=='') this.value='Ciudad o Aeropuerto'" onFocus="if(this.value =='Ciudad o Aeropuerto' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Fecha y Hora de salida:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
              <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper"> Fecha y Hora de regreso:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
              <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper">
            <p>Numero de Pasajeros:</p>
            <div class="bg left">
              <input type="text" class="input input2" value="# Pasajeros" onBlur="if(this.value=='') this.value='# Pasajeros'" onFocus="if(this.value =='# Pasajeros' ) this.value=''">
            </div>
            <a href="#" class="button2">go!</a> </div>
        </form>
        <h2>Noticias Recientes</h2>
        <p class="under"><a href="#" class="link1">Noticias</a><br>
          Diciembre 5, 2012</p>
        <p class="under"><a href="#" class="link1">Noticias</a><br>
          Diciembre 12, 2012</p>
        <p><a href="#" class="link1">Noticias</a><br>
          Diciembre 14, 2012</p>
      </div>
    </article>
    <article class="col2 pad_left1">
      <?php 	
		global $_PETICION;		
		$this->mostrar('/'.$_PETICION->accion); 
		?>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2012 SAW - Sistemas Automatizados Web - All Rights Reserved</p>        
        <div style="clear:both;"></div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</html>