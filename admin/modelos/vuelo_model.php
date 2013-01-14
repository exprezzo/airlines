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
		$sql='select * from vuelos LIMIT :start,:limit';		
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