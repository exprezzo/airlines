<?
require_once PATH_MVC.'/modelos/sis_model.php';
class Sis extends Controlador{	
	function getModel(){		
		if ( !isset($this->modObj) ){						
			$this->modObj = new SisModel();	
		}	
		return $this->modObj;
	}
	
	function reservacion(){
		
		$model=$this->getModel();
		$numRes=$model->reservar($_REQUEST);
		
		$datosVuelos=$model->getDatosVuelo( intval($_REQUEST['numVuelo']) );
		//print_r($_REQUEST);
		
		$vista= $this->getVista();							
		$vista->datosVuelo=$datosVuelos['datos'][0];
		$vista->numRes=$numRes;
		return $vista->mostrar( '/main' );
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
		$fechaSalida=$_REQUEST['fechaSalida'];
		$date=DateTime::createFromFormat ( 'd/m/Y' , $fechaSalida );	
		//print_r($date);
		$fecha=$date->format('Y-m-d');
		
		
		$vuelos=$model->getVuelos($fkOrigen,$fkDestino, $fecha);
		
		
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