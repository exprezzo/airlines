<?
class Pages extends Controlador{	
	function mostrarVista($vistaFile=''){				
		$vista= $this->getVista();					
		return $vista->mostrar( '/main' );
	}
}
?>