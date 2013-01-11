<?php
class SisModel extends Modelo_PDO{
	function getOrigenes(){
		$sql='Select id,id as value, nombre as label from destinos';
		$model=$this;
		
		$con=$model->getConexion();
		$sth=$con->prepare($sql);		
		$datos=$model->execute($sth);				
		return $datos;	
	}
	
	function getVuelos($origen, $destino, $fecha='2013-01-10'){
		$sql='SELECT  DATE_FORMAT(fecha,"%T") hora,numVuelo,costo from vuelos WHERE fk_origen=:origen and fk_destino=:destino
		AND DATEDIFF(fecha,:fecha)=0
		 ORDER BY hora ASC ';
		$model=$this;
		
		$con=$model->getConexion();
		$sth=$con->prepare($sql);		
		$sth->bindValue(':origen',$origen, PDO::PARAM_INT);
		$sth->bindValue(':destino',$destino, PDO::PARAM_INT);
		$sth->bindValue(':fecha',$fecha, PDO::PARAM_STR);
		$datos=$model->execute($sth);

		return $datos;	
	}
}
?>