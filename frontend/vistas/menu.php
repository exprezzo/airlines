<?php
	//Este bloque es creado para resaltar el menu de la pagina activa
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
<ul id="menu">	
  <li <? echo $idMenu_index; ?> ><a href="/index">Inicio</a></li>
  <li <? echo $idMenu_destinos; ?> ><a href="/destinos">Destinos</a></li>
  <li <? echo $idMenu_nosotros; ?> ><a href="/nosotros">Nosotros</a></li>
  <li <? echo $idMenu_contacto; ?> ><a href="/contacto">Contacto</a></li>
</ul>