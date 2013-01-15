<?php
$rutaModelos='../admin/modelos/';
require_once $rutaModelos.'vuelo_model.php';
class Vuelos extends Controlador{
	function getModel(){
		if ( !isset($this->modObj) ){
			$this->modObj = new VueloModel();
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