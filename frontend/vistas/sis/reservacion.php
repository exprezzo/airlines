<script type="text/javascript">
	$(function(){
		$("#pasajeros").wijgrid();		
		$('#btnConfirmar').click(function(){
			window.location='/index';
			return false;
		});
	});
</script>
<br>
<div style='font-size:23px;'>Reservaci&oacute;n: <label><?php echo $this->numRes; ?></label></div>
<br>
<br>
<?php
	
	$fecha = $this->datosVuelo['fecha'];
	$origen=$this->datosVuelo['origen'];
	$destino=$this->datosVuelo['destino'];
?>
Numero De Vuelo: <?php echo $_REQUEST['numVuelo']; ?>
<br>
Salida: <?php echo $fecha; ?>
<br>
Origen: <?php echo $origen; ?> 
<br>
Destino:<?php echo $destino; ?> 
<br>	

<h2>Contacto</h2>

Nombre:<?php echo $_REQUEST['nombre']; ?>
<br>
Email:<?php echo $_REQUEST['email']; ?>
<br>
Telefono:<?php echo $_REQUEST['telefono']; ?>
<br>
<h2>Pasajeros</h2>

<table id="pasajeros">
	<thead>
		<th>Nombre</th> <th>Apellido</th> 
	</thead>	  
	 <tbody>   
	 <?php foreach($_REQUEST['pasajeros'] as $pasajero){ ?>
    <tr>
		<?php		
			echo '<td>'.$pasajero['nombre'].'</td>'.'<td>'.$pasajero['apellido'].'</td>';		
		?>	
    </tr>	
	<?php	} ?>
  </tbody>
</table>

<a href="#" id="btnConfirmar" class="button2" type="submit">Confirmar</a>
