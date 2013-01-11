<?php
	$fkOrigen=$_REQUEST['fkOrigen'];
	$fkDestino=$_REQUEST['fkDestino'];
	$origen=$_REQUEST['origen'];
	$destino=$_REQUEST['destino'];
?>
<div class="pad_1">
	<h2>Plan de Vuelo</h2>
	<form id="form_1" action="/sis/verVuelos" method="post">
	  <div class="wrapper pad_bot1">
		<div class="radio marg_right1">
		  <input type="radio" name="name1" value="redondo" checked="true">
		   Redondo<br>
		  </div>
		<div class="radio">
		  <input type="radio" name="name1" value="sencillo">
		  Sencillo<br>
		</div>
	  </div>
	  <div class="wrapper"> Origen:
		   <br/>
		  <input id="cmbOrigen" name='origen' placeholder="seleccione origen" style='display:inline-block;background-white' value='<?php echo $origen; ?>'>
		  <input id="fkOrigen" name="fkOrigen" type="hidden" value='<?php echo $fkOrigen; ?>'>
	  </div>
	  <br />
	  <div class="wrapper"> Destino:
		  <br />
		  <input id="cmbDestino" name='destino' placeholder="seleccione origen" style='display:inline-block;background-white' value='<?php echo $destino; ?>'>
		  <input id="fkDestino" name="fkDestino" type="hidden" value='<?php echo $fkDestino; ?>' >
	  </div>
	  <br />
	  <div class="wrapper"> Fecha de salida:
		<input id="fechaSalida" name="fechaSalida" type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
	  </div>
	  <br />
	  <div class="wrapper" id="divFechaHora"> Fecha y Hora de regreso:
		<div class="wrapper">
			<input id="fechaRegreso" type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
		</div>
		<br />
	  </div>
	  
	  <div class="wrapper">
		<p>Numero de Pasajeros:</p>
		<div class="bg left">
		  <input type="text" class="input input2" value="# Pasajeros" onBlur="if(this.value=='') this.value='# Pasajeros'" onFocus="if(this.value =='# Pasajeros' ) this.value=''">
		</div>
		<a href="#" id="btnGo" class="button2" type="submit">go!</a>
	</div>
	</form>
	<h2>Noticias Recientes</h2>
	<p class="under"><a href="#" class="link1">Noticias</a><br>
	  Diciembre 5, 2012</p>
	<p class="under"><a href="#" class="link1">Noticias</a><br>
	  Diciembre 12, 2012</p>
	<p><a href="#" class="link1">Noticias</a><br>
	  Diciembre 14, 2012</p>
</div>