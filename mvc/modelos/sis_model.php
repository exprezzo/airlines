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
	function getDatosVuelo($idVuelo){
		$sql="SELECT v.*,o.nombre as origen,d.nombre as destino from vuelos v
		LEFT JOIN destinos o ON o.id=v.fk_origen
		LEFT JOIN destinos d ON d.id=v.fk_destino
		where v.numVuelo=:idVuelo";
		
		
		$model = $this;
		$con=$model->getConexion();
		$sth=$con->prepare($sql);				
		$sth->bindValue(':idVuelo',$idVuelo, PDO::PARAM_INT);
		$datos=$model->execute($sth);
		return $datos;
	}
	function reservar($params){
		
		$nombre=$params['nombre'];
		$email=$params['email'];
		$telefono=$params['telefono'];
		$numVuelo=$params['numVuelo'];
		
		$model=$this;
		$sql='INSERT INTO reservaciones SET nombre=:nombre, email=:email, telefono=:telefono,fk_vuelo=:numVuelo';		
		$con=$model->getConexion();
		$sth=$con->prepare($sql);		
		$sth->bindValue(':nombre',$nombre, PDO::PARAM_STR);
		$sth->bindValue(':email',$email, PDO::PARAM_STR);
		$sth->bindValue(':telefono',$telefono, PDO::PARAM_STR);
		$sth->bindValue(':numVuelo',$numVuelo, PDO::PARAM_INT);
		$datos=$model->execute($sth);
		$id=$con->lastInsertId ();
		
		foreach($params['pasajeros'] as $pasajero){
			$this->guardarPasajero($id, $pasajero);
		}
		
		
		
		
		return $id;	
		
	}
	function guardarPasajero($idReservacion, $pasajero){
		
		$model=$this;
		$sql='INSERT INTO pasajeros SET nombre=:nombre, apellidos=:apellido, fk_reservacion=:fk_reservacion';		
		$con=$model->getConexion();
		$sth=$con->prepare($sql);		
		$sth->bindValue(':nombre',$pasajero['nombre'], PDO::PARAM_STR);
		$sth->bindValue(':apellido',$pasajero['apellido'], PDO::PARAM_STR);
		$sth->bindValue(':fk_reservacion',$idReservacion, PDO::PARAM_INT);
		$datos=$model->execute($sth);
	}
}
?>