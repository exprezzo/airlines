<!DOCTYPE html>
<html lang="en">
<head>
<title>America Airlines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/cufon-replace.js"></script>
<script type="text/javascript" src="/js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="/js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="/js/Myriad_Pro_400.font.js"></script>

	
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
	<!--jQuery References-->
	<!--link href="/js/jquery-ui-1.9.2.custom/css/flick/jquery-ui-1.9.2.custom.css" rel="stylesheet"-->	
	<script src="/js/libs/jquery-1.8.3.js"></script>
	<script src="/js/libs/jquery-ui-1.9.2.custom/jquery-ui-1.9.2.custom.js"></script>  
	<!--Theme-->
	<!--link href="http://cdn.wijmo.com/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css"  /-->
	<link href="/css/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" title="rocket-jqueryui" />
	<!--link href="/css/themes/cobalt/jquery-wijmo.css" rel="stylesheet" type="text/css" title="rocket-jqueryui" /-->		
	
	<!--Wijmo Widgets CSS-->	
	<link href="/js/libs/Wijmo.2.3.2/Wijmo-Complete/css/jquery.wijmo-complete.2.3.2.css" rel="stylesheet" type="text/css" />
	<link href="/js/libs/Wijmo.2.3.2/Wijmo-Open/css/jquery.wijmo-open.2.3.2.css" rel="stylesheet" type="text/css" />			
	<!--link href="/css/themes/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet"-->	
	<!--Wijmo Widgets JavaScript-->
	<script src="/js/libs/Wijmo.2.3.2/Wijmo-Complete/js/jquery.wijmo-complete.all.2.3.2.min.js" type="text/javascript"></script>
	<script src="/js/libs/Wijmo.2.3.2/Wijmo-Open/js/jquery.wijmo-open.all.2.3.2.min.js" type="text/javascript"></script>		
	<!-- Gritter -->
	<link href="/js/libs/Gritter-master/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<script src="/js/libs/Gritter-master/js/jquery.gritter.min.js" type="text/javascript"></script>
	
	
	<script src="/js/plan_de_vuelo.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			var plan=new PlanDeVuelo();
			plan.init();
		});		
	</script>
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
			<?php $this->mostrar('/menu'); ?>
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
		<?php $this->mostrar('/plan_de_vuelo'); ?>
    </article>
    <article class="col2 pad_left1">
      <?php 	
		global $_PETICION;		
		$this->mostrar('/'.$_PETICION->controlador.'/'.$_PETICION->accion); 
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