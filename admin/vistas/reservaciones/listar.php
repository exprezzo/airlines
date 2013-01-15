<script src="/js/admin/catalogos/reservaciones/listado.js"></script>
<style type="text/css">
	.colFecha{
		text-align:right;
	}
</style>
<script>			
	$( function(){
			
		//$("#lista_de_reservaciones").wijgrid();		
		 var tabId="<?php echo $_REQUEST['tabId']; ?>";
		 var lista=new ListaReservaciones(tabId);
		 lista.init(tabId);
		
	});
</script>

<div style="">	
	<?php
		global $_PETICION;
		$this->mostrar($_PETICION->controlador.'/lista_toolbar');
	?>
	<table id="lista_de_reservaciones">
		<thead>
			<th>Cod</th>		
			<th>Nombre</th>		
			<th>Email</th>		
			<th>Telefono</th>		
			<th>Vuelo</th>		
			<th>Origen</th> 		
			<th>Destino</th>
		</thead>  	 
		<tbody>
			
		</tbody>
	</table>
</div>
</div>