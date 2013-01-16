<?php
$rutaModelos='../admin/modelos/';
require_once $rutaModelos.'vuelo_model.php';
require_once $rutaModelos.'destino_model.php';
class Vuelos extends Controlador{
	function getModel(){
		if ( !isset($this->modObj) ){
			$this->modObj = new VueloModel();
		}
		return $this->modObj;
	}
	
	function nuevo(){
		$vista = $this->getVista();
		global $_PETICION;
		$destMod=new DestinoModel();		
		$destRes=$destMod->paginar(0,5000);
		
		$vista->destinos=$destRes['rows'];		
		
			
		$fecha=date('Y-d-m');
		$hora=date('H:i:s');
		
		$vista->vuelo=array(
			'id'=>0,
			'fk_origen'=>1,
			'fk_destino'=>2,
			'fecha'=>$fecha,
			'hora'=>$hora,
			'costo'=>1,
			'origen'=>1,
			'destino'=>1,
			'numVuelo'=>'',
			'asientos_disponibles'=>0
		);
		$vista->mostrar($_PETICION->controlador.'/vuelo');
		
		$vista->mostrar($_PETICION->controlador.'/vuelo');
	}
	
	function guardar(){
		$vuelo= $_POST['vuelo'];
		
		if ( empty($_POST['vuelo']) ){
			$res=array(
				'success'=>false,
				'msg'=>'No se recibieron datos para almacenar'
			);
			echo json_encode($res); exit;
		}
		// if ( empty($_POST['pedido']['almacen']) ){
			// $res=array(
				// 'success'=>false,
				// 'msg'=>'Debe seleccionar un almac&eacute;n de origen'
			// );
			// echo json_encode($res); exit;
		// }
		
		
		$date=DateTime::createFromFormat ( 'd/m/Y' , $vuelo['fecha'] );			
		$fecha=$date->format('d/m/Y');
		
		$fecha = $fecha . ' ' . $vuelo['hora'];
		
		$date=DateTime::createFromFormat ( 'd/m/Y h:i:s A' , $fecha );			
		$fecha=$date->format('Y-m-d H:i:s');
		
		
		$costo = str_replace ( '$' , '' , $vuelo['costo'] );
		$costo = str_replace ( ',' , '' , $costo );
		 
		$vuelo['costo']=$costo;
		$vuelo['fecha']=$fecha;
		$model=$this->getModel();
		$res = $model->guardar($vuelo);
		echo json_encode($res);
	}
	
	function editar(){
		$vista = $this->getVista();
		global $_PETICION;
		
		$id=$_REQUEST['objId'];
		$params=array('id'=>$id);
		$mod=$this->getModel();
		
		$params=array('id'=>$id);
		$obj=$mod->obtener($params);
		if (!$obj['success']){
			//Responder exprlicando el incoveniente			
			echo json_encode($obj);			
			return $obj;
		}
		
		$destMod=new DestinoModel();		
		$destRes=$destMod->paginar(0,5000);
		
		$vista->destinos=$destRes['rows'];		
		$vista->vuelo=$obj['datos'][0];
		$vista->mostrar($_PETICION->controlador.'/vuelo');
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