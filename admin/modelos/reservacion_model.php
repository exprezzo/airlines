<?php
class ReservacionModel extends Modelo_PDO{
	var $tabla='reservaciones';	
	
	function paginar($start=0, $pageSize=9){
		$sql='select COUNT(id) as total FROM reservaciones';
		$model=$this;
		$con=$model->getConexion();
		$sth=$con->prepare($sql);
		$datos=$model->execute($sth);
		
		$total=$datos['datos'][0]['total'];		
		$sql='select r.*,r.fk_vuelo as vuelo, o.nombre as origen, d.nombre as destino from reservaciones r
left join vuelos v ON v.numVuelo = r.fk_vuelo
left join destinos o ON o.id = v.fk_origen
left join destinos d ON d.id = v.fk_destino LIMIT :start,:limit';		
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