Vuelos = {};

Vuelos.Edicion= function(){	
	this.init = function(tabId){		
		
		tabId = '#'+tabId;
		this.tabId=tabId;
		var tab=$('div'+tabId);
		$('div'+tabId).css('padding','0');
		$('div'+tabId).css('border','0 1px 1px 1px');
		
		var id = tab.find('.txtId').val();
		
		tab.addClass('frmVuelo');
		var tab=$('a[href="'+tabId+'"]');		
		tab.addClass('frmVuelo');
		
		$(tabId+" .txtHora").wijinputdate({ dateFormat: 'T' });
		   $(tabId+ " .txt_num_pasajeros").wijinputnumber( 
			{
				type: 'numeric',
				minValue: -100,
				maxValue: 10000,
				
				showSpinner: true
			});
			 $(tabId+ " .txtCosto").wijinputnumber( 
			{
				type: 'currency',				
				decimalPlaces: 2,
				showSpinner: true
			});
			
		
		//Para identificar el contenido del tab
		//var objId='pedidoi_id_'+pedidoId;								
		//$('#tabs '+tabId).attr('objId',objId);
		
		//Establecer titulo e icono
		if (id>0){
			var numVuelo =$(tabId+' .txtNumVuelo').val();
			$('a[href="'+tabId+'"]').html('Vuelo '+numVuelo);		
		}else{
			$('a[href="'+tabId+'"]').html('Nuevo Vuelo');
		}
		
		this.configurarFormulario(tabId);		
	};
	this.nuevo = function(){
		var tabId=this.tabId;
		var tab = $('#tabs '+tabId);
		$('a[href="'+tabId+'"]').html('Nuevo Pedido');
		tab.find('.txtId').val(0);
	};
	// cargarValoresIniciales:function(){
	// },
	this.guardar=function(){
		
		var tabId=this.tabId;
		var tab = $('#tabs '+tabId);
		var me=this;
		var vuelo={
			id		: tab.find('.txtId').val(),
			fk_origen	: tab.find('.txt_fk_origen').val(),
			fk_destino	: tab.find('.txt_fk_destino').val(),
			fecha	: tab.find('.txt_fecha').val(),
			hora	: tab.find('.txtHora').val(),
			costo	: tab.find('.txtCosto').val(),
			numVuelo: tab.find('.txtNumVuelo').val(),
			num_pasajeros	: tab.find('.txt_num_pasajeros').val()			
			
		};
		
		//Envia los datos al servidor, el servidor responde success true o false.
		
		$.ajax({
			type: "POST",
			url: '/admin/vuelos/guardar',
			data: { vuelo: vuelo}
		}).done(function( response ) {
									
			var resp = eval('(' + response + ')');
			var msg= (resp.msg)? resp.msg : '';
			var title;
			if ( resp.success == true	){
				icon='/images/yes.png';
				title= 'Success';
				
				tab.find('h2.titulo').html('Vuelo '+resp.datos.numVuelo);
				// tab.find('.txtFkAlmacen').val(resp.datos.fk_almacen),
				// tab.find('.txtFecha').wijinputdate('option','date', resp.datos.fecha); 
				var objId = 'admin/vuelos/editar'+'?id='+resp.datos.id;
				objId = objId.toLowerCase();								
				$(me.tabId ).attr('objId',objId);	
		
				 $('a[href="'+me.tabId+'"]').html('Vuelo '+resp.datos.numVuelo);		
				 
				
			}else{
				icon= '/images/error.png';
				title= 'Error';					
			}
			
			//cuando es true, envia tambien los datos guardados.
			//actualiza los valores del formulario.
			$.gritter.add({
				position: 'bottom-left',
				title:title,
				text: msg,
				image: icon,
				class_name: 'my-sticky-class'
			});
		});
	};
	
	this.configurarFormulario = function(tabId){
		var me=this;
		
		$(tabId+' .saveForm').click(function(){
			
			me.guardar();
			
			return false;
		});
		
		var combo=$('#tabs '+tabId+' .cmbOrigen').wijcombobox({						
			select: function (e, item) {				
				$('#tabs '+tabId+' .txt_fk_origen').val(item.value);				
			},
			dropdownHeight: 150,
            dropdownWidth: 200,
            showingAnimation: { effect: "blind" },
            hidingAnimation: { effect: "blind" }
		});
		
		var cmbDestino=$('#tabs '+tabId+' .cmbDestino').wijcombobox({						
			select: function (e, item) {			
				
				$('#tabs '+tabId+' .txt_fk_destino').val(item.value);				
			},
			dropdownHeight: 150,
            dropdownWidth: 200,
            showingAnimation: { effect: "blind" },
            hidingAnimation: { effect: "blind" }
		});
		
		
		$('#tabs '+tabId+' .txt_fecha').wijinputdate({ dateFormat: 'd/M/yyyy', showTrigger: true});		
		
		
		
		
		var animationOptions = {
			 animated: "Drop",
			 duration: 1000
		};
		combo.wijcombobox("option", "showingAnimation", animationOptions);		
		combo.wijcombobox("option", "hidingAnimation", animationOptions);
		cmbDestino.wijcombobox("option", "showingAnimation", animationOptions);		
		cmbDestino.wijcombobox("option", "hidingAnimation", animationOptions);
		
		
		
	};
	
	
}