<script>
	$(function(){
		$('#btnRegistrar').click(function(){
			$('#formRegistro').submit();
			return false;		
		});
	});
</script>
<?php 
$numPasajeros=$_REQUEST['numPasajeros'];
?>




<style type="text/css">
	#formRegistro input{
		border:1px solid;
	}
	
	#formRegistro .pasajero div{
		display:inline-block;
	}
	
	.contacto label{
		width:100px;
		display:inline-block;
	}
</style>


<h2>Reservar Vuelo</h2>
<form id="formRegistro" action="/sis/reservacion" method="POST" >
	<input name="numVuelo" type="hidden"  value="<?php print_r($_REQUEST['numVuelo']); ?>" > 
	<h2>Contacto</h2>
	<div class="contacto">
		<div>
			<label>Nombre:</label><input name="nombre" type="text" />
		</div>
		<div>
			<label>Email:</label><input name="email" type="text" />
		</div>
		<div>
			<label>Telefono:</label><input name="telefono" type="text" />
		</div>
	</div>
	<h2>Pasajeros</h2>
<?php 
	
	for($i=0; $i<$numPasajeros; $i++){
	?>
		<div class="pasajero">
			<div>
				<label>Nombre:</label><input name="pasajeros[<?php echo $i; ?>][nombre]" type="text" />
			</div>
			<div>
				<label>Apellidos:</label><input name="pasajeros[<?php echo $i; ?>][apellido]" type="text" />
			</div>
		<div>
	<?php	
	}	
?>
</form>
<br>
<a href="#" id="btnRegistrar" class="button2" type="submit">Registrar</a>