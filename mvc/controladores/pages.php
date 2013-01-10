<?
class Pages extends Controlador{
	// function getVista(){
		// if ( !isset($this->vistaObj) ){
			// global $_PETICION;
			// $nombreVista=$_PETICION->accion;
			
			// require_once VISTAS_PATH.'/main.php';
			// $this->vistaObj = new Vista();
		// }
		// return $this->vistaObj;
	// }
	
	function mostrarVista($vistaFile=''){				
		$vista= $this->getVista();					
		return $vista->mostrar( '/main' );
	}
}
?>