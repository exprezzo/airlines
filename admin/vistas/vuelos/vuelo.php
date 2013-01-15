<?php
	$vuelo = $this->vuelo;
	
?>
<style>
	.frmVuelo li{
		display:block;
		margin-bottom:9px;
		
		
	}
	form.frmVuelo{
		border: black 1px solid;
width: 300px;
box-shadow: 4px 4px 22px;
margin-top: 12px;
left: 50%;
position: absolute;
margin-left: -150px;
	}
	
	.buttons{
		right: 15px;
		top: 20px;
		position:absolute;
	}
	.buttons button{
		height:20px;
		height: 50px;
vertical-align: bottom;
padding-top: 12px;

		
		
	}
</style>
<script src="/js/admin/catalogos/vuelos/edicion.js" /> 
<script >
	
	$(function(){
		var tabId ="<?php echo $_REQUEST['tabId']; ?>";
		/*
		var vuelo = new Lgo.Formulario(tabId, formName);
		
		*/
		
		var vuelo=new Vuelos.Edicion();
		vuelo.init(tabId);
	});
</script>
<div id="container" class="ltr">

	<form class="frmVuelo wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
	action="/admin/vuelos/guardar">
		<?php 
		$titulo = empty($vuelo['numVuelo'])? 'NUEVO' : $vuelo['numVuelo'];
		?>
		<h2>Vuelo <?php echo $titulo ?></h2>
		<div class="buttons ">
			<div>
				<button name="saveForm" class="btTxt submit saveForm"  value="Submit">Guardar</button>
			 </div>
		</div>
		<ul>		
		<li class="notranslate ">
			<label class="desc" >Codigo del Vuelo</label>
			<div>				
				<input name="vuelo[numVuelo]" type="text" class="txtNumVuelo field text medium" value="<?php echo $vuelo['numVuelo']; ?>" maxlength="255" onkeyup="" />
			</div>
		</li>
		<li  class="notranslate       ">
			<label class="desc" >Origen</label>
			<div>
				<select class="cmbOrigen" class="field select medium"> 
					<?php					
					foreach($this->destinos as $destino){
						$selected=($destino['id']==$vuelo['fk_origen'])? "selected" : '';						
						echo '<option '.$selected.' value="'.$destino['id'].'" >'.$destino['nombre'].'</option>';
					}
					?>					
				</select>
			</div>
		</li>
		<li class="notranslate       ">
			<label class="desc" >
			Destino
			</label>
			<div>
			<select class="cmbDestino select medium"  > 
				<?php					
					foreach($this->destinos as $destino){
						$selected=($destino['id']==$vuelo['fk_destino'])? "selected" : '';						
						echo '<option '.$selected.' value="'.$destino['id'].'" >'.$destino['nombre'].'</option>';
					}
				?>					
			</select>
			</div>
		</li> 
		<li class="notranslate      ">
			<label  >Fecha</label>
			<div>
				<input class="txt_fecha" name="vuelo[fecha]" type="text" class="field text medium" value="<?php echo $vuelo['fecha']; ?>" maxlength="255" onkeyup="" />
			</div>
		</li>
		<li class="notranslate      ">
			<label class="desc" >Hora</label>
			<div>
				<input name="vuelo[hora]" type="text" class="field text medium" value="<?php echo $vuelo['hora']; ?>" maxlength="255" onkeyup="" />
			</div>
		</li>
		
		<li class="notranslate      ">
			<label class="desc" >Hora</label>
			<div>
				<input name="vuelo[numPasajeros]" type="text" class="txt_num_pasajeros field text medium" value="<?php echo $vuelo['hora']; ?>" maxlength="255" onkeyup="" />
			</div>
		</li>
		
		<li class="notranslate      ">
			<label class="desc" >Costo</label>
			<div>
				<input name="vuelo[costo]" type="text" class="txtCosto field text medium" value="<?php echo $vuelo['costo']; ?>" maxlength="255" onkeyup="" />
			</div>
		</li>
		
		

		<!--li class="hide">
			<label for="comment">Do Not Fill This Out</label>
			<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
			<input type="hidden" id="idstamp" name="idstamp" value="OS1J49y6MYQ+LuB5DQm+Ey13OUS4jKVGke1cKYqxVI8=" />
		</li-->
		</ul>
		<input type="hidden"  class="txt_fk_origen" name="vuelo[fk_origen]" value="<?php echo $vuelo['fk_origen']; ?>">		
		<input type="hidden" class="txt_fk_destino" name="vuelo[fk_destino]" value="<?php echo $vuelo['fk_destino']; ?>">
		<input class="txtId" type="hidden" name="vuelo[id]" value="<?php echo $vuelo['id']; ?>">
		
	</form> 
	
</div>
