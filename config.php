<?php
//$APP_URL='http://'.$_SERVER['SERVER_NAME']; 

$DB_CONFIG=array(
	'DB_SERVER'	=>'localhost',
	'DB_NAME'	=>'airlines',
	'DB_USER'	=>'root',
	'DB_PASS'	=>''
);

// Configuracion del ssitio
define ("NOMBRE_APL",'AMERICA AIRLINES');
define ("TEMA",'rocket');

/*
Temas disponibles:   (la intencion es agregar todos los temas de jqureyui y de wijmo, pero no queremos ser dependientes de sus servicios web)
aristo
artic
cobalt
flick
midnight
rocket
sterling
ui-lightness

blitzer
*/


define ("PATH_MVC",'../frontend/');

// CONFIGURA LA RUTA DEL NUCLEO
define ("PATH_NUCLEO",'../mvc_core/');
?>