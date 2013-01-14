<?php
require_once '../admin/modelos/destino_model.php';
class Destinos extends Controlador{
	function getModel(){		
		if ( !isset($this->modObj) ){						
			$this->modObj = new DestinoModel();	
		}
		return $this->modObj;
	}	
			
	function paginar(){
		$mod=$this->getModel();
		
		$paging=$_GET['paging'];
		$pageSize=intval($paging['pageSize']);
		$start=intval($paging['pageIndex'])*$pageSize;
		
		$res=$mod->paginar($start,$pageSize);
		
		
		echo json_encode($res); exit;
	}
	
	
}
?>