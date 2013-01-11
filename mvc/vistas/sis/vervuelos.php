<script>
$(function(){

	$("#tabla_vuelos").wijgrid();
	
	
});
</script>
<?php 
$fechaSalida=$_REQUEST['fechaSalida'];
$origen=$_REQUEST['origen'];
$destino=$_REQUEST['destino'];
?>
<br>
Vuelos para el dia <b><?php echo $fechaSalida; ?></b> de: <label style="font-weight:bold; font-size:20px;"><?php echo $origen; ?></label> a <label style="font-weight:bold; font-size:20px;"><?php echo $destino; ?></label>
<br><br>
<?php
	if ( empty($this->vuelos) ){
		echo '<h1 style="color:red;">No Hay vuelos disponibles para esta fecha</h1>';
	}else{
	
?>
<table id="tabla_vuelos">
	<thead>
		<th>Hora Salida</th> <th>Numero de vuelo</th> <th>Costo</th>
	</thead>	  
	 <tbody>   
	 <?php foreach($this->vuelos as $vuelo){ ?>
    <tr>
		<?php		
			echo '<td>'.$vuelo['hora'].'</td>'.'<td>'.$vuelo['numVuelo'].'</td>'.'<td>'.$vuelo['costo'].'</td>';		
		?>	
    </tr>
	<?php	} ?>
  </tbody>
</table>
<?php
	}
	
?>
