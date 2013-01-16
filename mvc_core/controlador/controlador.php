<?php
require '../mvc_core/modelo/Modelo_PDO.php';
class Controlador{

	function mostrarVista($vistaFile=''){		
		
		$vista= $this->getVista();					
		global $_PETICION;
		
		$archivoVista='';
		if ( empty($vistaFile) ){									
			if ( !empty($_PETICION->controlador) ){			
				$archivoVista = $_PETICION->controlador.'/'.$_PETICION->accion;				
			}else{
				
				$archivoVista =  $_PETICION->accion;
			}
		}else{
			$archivoVista = $vistaFile;
		}
	
		return $vista->mostrar( $archivoVista );
	}
	
	function getVista(){
		if ( !isset($this->vistaObj) ){
			require_once PATH_NUCLEO.'vista/vista.php';
			$this->vistaObj = new Vista();
		}
		return $this->vistaObj;
	}
	
	function mostrarErrores($errores){
		$vista		= $this->getVista();
		$vista->errores	= $errores;
		return $this->mostrarVista();
	}			
	
	function mostrarError($errores){
		return $this->mostrarErrores($errores);		
	}				
	function eliminar(){
		$modObj= $this->getModel();
		$params=array();
		
		if ( !isset($_POST['id']) ){
			$id=$_POST['datos'];
		}else{
			$id=$_POST['id'];
		}
		$params['id']=$id;
		
		$res=$modObj->borrar($params);
		$respuesta = array(
			'success'=>$res,
			'msg'=>'Registro Eliminado'
		);
		
		echo json_encode($respuesta);
		
		return $respuesta;
	}
	function getModel(){		
		if ( !isset($this->modObj) ){						
			$this->modObj = new Modelo_PDO();	
		}	
		return $this->modObj;
	}		
}
?>