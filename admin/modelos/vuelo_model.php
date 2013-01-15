<?php
class VueloModel extends Modelo_PDO{
	var $tabla='vuelos';	
	
	function paginar($start=0, $pageSize=9){
		$sql='select COUNT(id) as total FROM vuelos';
		$model=$this;
		$con=$model->getConexion();
		$sth=$con->prepare($sql);
		$datos=$model->execute($sth);
		
		$total=$datos['datos'][0]['total'];		
		$sql='SELECT v.id,o.nombre as origen, d.nombre as destino, v.fecha,v.costo,v.numVuelo, v.asientos_disponibles From vuelos v
left join destinos o ON o.id=v.fk_origen
left join destinos d ON d.id=v.fk_destino LIMIT :start,:limit';		
		$con=$model->getConexion();
		$sth=$con->prepare($sql);
		$sth->bindValue(':start',$start, PDO::PARAM_INT);		
		$sth->bindValue(':limit',$pageSize, PDO::PARAM_INT);		
		$datos=$model->execute($sth);
		
		return array(
			'totalRows'=>$total,
			'rows'=>$datos['datos']
		);
	}
}
?>