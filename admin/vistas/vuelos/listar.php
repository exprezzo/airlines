<script src="/js/admin/catalogos/vuelos/listado.js"></script>
<style type="text/css">
	.colFecha{
		text-align:right;
	}
</style>
<script>			
	$( function(){			
		 var tabId="<?php echo $_REQUEST['tabId']; ?>";
		 var lista=new ListaVuelos(tabId);
		 lista.init(tabId);		
	});
</script>

<div style="">	

	<?php 
	global $_PETICION;
	$this->mostrar($_PETICION->controlador.'/lista_toolbar');
	?>
	<table id="lista_de_vuelos">
		<thead>
			<th>ID</th>		
			<th>Nombre</th>					
		</thead>  	 
		<tbody>
			
		</tbody>
	</table>
</div>
</div>