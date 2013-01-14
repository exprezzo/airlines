<script type="text/javascript" src="/js/lista_vuelos.js"></script>

<script>
$(function(){
	var vuelos=new ListaVuelos();
	vuelos.init();
});
</script>
<?php 
$fechaSalida=$_REQUEST['fechaSalida'];
$origen=$_REQUEST['origen'];
$destino=$_REQUEST['destino'];
$numPasajeros=empty($_REQUEST['numPasajeros'])? 0: $_REQUEST['numPasajeros'];

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
		<th>Hora Salida</th> <th>Numero de vuelo</th> <th>Costo U </th> <th>Total</th>
	</thead>	  
	 <tbody>   
	 <?php foreach($this->vuelos as $vuelo){ ?>
    <tr>
		<?php		
			echo '<td>'.$vuelo['hora'].'</td>'.'<td>'.$vuelo['numVuelo'].'</td>'.'<td>'.$vuelo['costo'].'</td>'.'<td>'.( $numPasajeros * $vuelo['costo'] ).'</td>';		;		
		?>	
    </tr>
	
	<?php	} ?>
  </tbody>
</table>
<br>
<a href="#" id="btnContinuar" class="button2" type="submit">continuar!</a>
<form id="registrar" action="/sis/registrar_pasajeros" method="POST" >
	<input type="text" name="numPasajeros">
	<input type="text" name="numVuelo">
</form>
<?php
	}
	
?>
