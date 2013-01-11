<?
require_once '../mvc/modelos/sis_model.php';
class Sis extends Controlador{	
	function getModel(){		
		if ( !isset($this->modObj) ){						
			$this->modObj = new SisModel();	
		}	
		return $this->modObj;
	}
	
	function getOrigenes(){	
		$model=$this->getModel();
		
		$res=$model->getOrigenes();
		
		$res['rows']=$res['datos'];		 
		echo json_encode($res);
	}
	
	function vervuelos(){
		$model=$this->getModel();
		
		$fkOrigen=$_REQUEST['fkOrigen'];
		$fkDestino=$_REQUEST['fkDestino'];
		$vuelos=$model->getVuelos($fkOrigen,$fkDestino);
		
		
		$vista= $this->getVista();							
		$vista->vuelos = $vuelos['datos'];
		return $vista->mostrar( '/main' );
	}
	function mostrarVista($vistaFile=''){				
		$vista= $this->getVista();					
		return $vista->mostrar( '/main' );
	}
}
?>