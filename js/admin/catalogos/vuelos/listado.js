var ListaVuelos=function(){
	this.init=function(tabId){
		tabId = '#' + tabId;
		this.tabId = tabId;
		
		$('div'+tabId).css('padding','0px 0 0 0');
		$('div'+tabId).css('margin-top','0px');
		$('div'+tabId).css('border','0 1px 1px 1px');

		var tab=$('a[href="'+tabId+'"]');
		tab.html('Vuelos');
		tab.addClass('listaVuelos');
		this.configurarToolbar(tabId);
		this.configurarGrid(tabId);
	};

	this.configurarToolbar=function(tabId){
		var me=this;
		
		$(tabId+ " .tbVuelos").wijribbon({
			click: function (e, cmd) {
				switch(cmd.commandName){
					case 'nuevo':
						TabManager.add('/admin/vuelos/nuevo','Nuevo Pedido');				
					break;
					case 'editar':
						if (me.selected!=undefined){													
							TabManager.add('/admin/vuelos/editar','Editar Pedido',me.selected.id);
						}
					break;
					case 'eliminar':
						if (me.selected==undefined) return false;
						var r=confirm("¿Eliminar el elemento?");
						if (r==true){
						  me.eliminar();
						}
					break;
					case 'refresh':
						var fi=$('#tabs '+tabId+' .txtFechaI').val();
						//alert(fi);
						var gridPedidos=$(me.tabId+" #lista_de_vuelos");
						gridPedidos.wijgrid('ensureControl', true);
					break;
					default:
						$.gritter.add({
							position: 'bottom-left',
							title:"Informaci&oacute;n",
							text: "Acciones del toolbar en construcci&oacute;n",
							image: '/images/info.png',
							class_name: 'my-sticky-class'
						});
					break;
					case 'imprimir':
						alert("Imprimir en construcción");						
					break;
				}
				
			}
		});
		$('#tabs '+tabId+' .txtFechaI').wijinputdate({ dateFormat: 'd/M/yyyy', showTrigger: true});	
		$('#tabs '+tabId+' .txtFechaF').wijinputdate({ dateFormat: 'd/M/yyyy', showTrigger: true});	
	};
	this.configurarGrid=function(tabId){
		var pageSize=10;
		var hContainer = $('#tabs').height();
		var hNav= $('#tabs .ui-tabs-nav').height();
		var newH = hContainer-hNav;
		var altoHeaderGrid = 38;
		newH=newH - (2*altoHeaderGrid);
		newH=parseInt(newH/altoHeaderGrid);
		pageSize=newH-1;		

		//var totalRows=<?php //echo isset($this->total)?$this->total: 0 ?>;
		var fields=[
			{ name: "id"  },
			{ name: "origen"},
			{ name: "destino"},
			{ name: "fecha"},
			{ name: "costo"},
			{ name: "asientos_disponibles"},
			{ name: "numVuelo"}
		];
		var dataReader = new wijarrayreader(fields);

		var dataSource = new wijdatasource({
			proxy: new wijhttpproxy({
				url: "/admin/vuelos/paginar",
				dataType: "json"
			}),
			dynamic:true,			
			reader:new wijarrayreader(fields)							
		});
		dataSource.reader.read= function (datasource) {			
			var totalRows=datasource.data.totalRows;			
			datasource.data = datasource.data.rows;
			datasource.data.totalRows = totalRows;
			dataReader.read(datasource);
		};				
		this.dataSource=dataSource;
		var grid=$("#lista_de_vuelos");

		this.grid=grid;
		
		grid.wijgrid({
			dynamic: true,
			allowColSizing:true,
			//allowEditing:true,
			allowKeyboardNavigation:true,
			allowPaging: true,
			pageSize:pageSize,
			 showFilter: false,
			// showFooter:true,
			 afterCellEdit: this.afterCellEdit, 
                afterCellUpdate: this.afterCellUpdate, 
                beforeCellEdit: this.beforeCellEdit, 
                beforeCellUpdate: this.beforeCellUpdate,
			//selectionMode:'singleRow', //DEFAULT
			data:dataSource,
			columns: [ 
			{ dataKey: "id", visible:false, headerText: "ID" },
			{dataKey: "numVuelo", headerText: "Vuelo" },
			{dataKey: "origen", headerText: "Origen" },
			{dataKey: "destino", headerText: "Destino" },
			{dataKey: "fecha", headerText: "Fecha" },
			{dataKey: "costo", headerText: "Precio U" },
			{dataKey: "asientos_disponibles", headerText: "asientos_disponibles",visible:false }
			
			
			],
			rowStyleFormatter: function(args) {
				// if (args.dataRowIndex>-1)
					// args.$rows.attr('pedidoId',args.data.id);
			},
			loading: function (dataSource, userData) {                            
				// var fi=$('#tabs '+me.tabId+' .txtFechaI').val();	
				// var ff=$('#tabs '+me.tabId+' .txtFechaF').val();			
                // me.dataSource.proxy.options.data={fechai:fi, fechaf:ff};
            },
			cellStyleFormatter: function(args) { 
				if (args.column._originalDataKey=='fecha'){
					// console.log(args);		
					args.$cell.addClass("colFecha");
				}			
				if (args.column._originalDataKey=='costo' || args.column._originalDataKey=='asientos_disponibles' ){
					// console.log(args);		
					args.$cell.addClass("colNumero");
				}
			} 
		});
		
		var me=this;
		
		
		grid.wijgrid({ selectionChanged: function (e, args) { 					
			var item=args.addedCells.item(0);
			var row=item.row();
			console.log("row");
			console.log(row);
			var data=row.data;			
			me.selected=data;			
		} });
		
		grid.wijgrid({ loaded: function (e) { 
			//console.log($(me.tabId+' #lista_de_vuelos tr'));
			
			 $(me.tabId+' #lista_de_vuelos tr').bind('dblclick', function (e) { 							 
				 if (me.selected == undefined) return false;
				 
				 var objId=me.selected.id;
				 
				 if (objId==undefined || objId=='' || objId==0) return false;				
				 TabManager.add('/admin/vuelos/editar','Editar Vuelo',objId);				
			 });			
		} });
	};
	
	
	this.beforeCellEdit = function(e, args) {
		 var positions = [ 
            { label: "GK", value: "1GK" }, 
            { label: "SW", value: "2SW" }, 
            { label: "LB", value: "3LB" }, 
            { label: "CB", value: "4CB" }, 
            { label: "RB", value: "5RB" }, 
            { label: "DM", value: "6DM" }, 
            { label: "LM", value: "7LM" }, 
            { label: "CM", value: "8CM" }, 
            { label: "RM", value: "9RM" }, 
            { label: "AM", value: "10AM" }, 
            { label: "LW", value: "11LW" }, 
            { label: "SS", value: "12SS" }, 
            { label: "RW", value: "13RW" }, 
            { label: "CF", value: "14CF" } 
        ]; 
            switch (args.cell.column().dataKey) { 
                case "origen":
                    $("<input />")
                        .val(args.cell.value()) 
                        .appendTo(args.cell.container()) 
                        .wijcombobox({ 
                            data: $.map($.extend(true, [], positions), function (item, index) { 
                                if (item.value === args.cell.value()) { 
                                    item.selected = true; 
                                } 
  
                                return item; 
                            }), 
                            isEditable: false
                        }); 
  
                    args.handled = true; 
  
                    break; 
  
                case "Acquired": 
                    $("<input />") 
                        .width("100%") 
                        .appendTo(args.cell.container().empty()) 
                        .wijinputnumber({ 
                            decimalPlaces: 0, 
                            showSpinner: true, 
                            value: args.cell.value() 
                        }) 
                        .focus(); 
  
                    args.handled = true; 
  
                    break; 
            } 
        } 
  
        this.beforeCellUpdate=function(e, args) { 
            switch (args.cell.column().dataKey) { 
                case "origen": 
                    args.value = args.cell.container().find("input").val(); 
					console.log(args.value);
                    break; 
  
                case "Acquired": 
                    var $editor = args.cell.container().find("input"), 
                        value = $editor.wijinputnumber("getValue"), 
                        curYear = new Date().getFullYear(); 
  
                    if (value < 1990 || value > curYear) { 
                        $editor.addClass("ui-state-error") 
  
                        alert("value must be between 1990 and " + curYear); 
  
                        $editor.focus(); 
  
                        return false; 
                    } 
                      
                    args.value = value; 
                    break; 
            } 
        } 
  
         this.afterCellUpdate=function(e, args) { 
            $("#log").html(dump($("#demo").wijgrid("data"))); 
        } 
  
         this.afterCellEdit =  function(e, args) { 
            switch (args.cell.column().dataKey) { 
                case "Position": 
                    args.cell.container().find("input").wijcombobox("destroy"); 
                    break; 
  
                case "Acquired": 
                    args.cell.container().find("input").wijinputnumber("destroy"); 
                    break; 
            } 
        }
}

ListaVuelos.prototype.eliminar=function(){
	
	var id = this.selected.id;
	var me=this;
	$.ajax({
			type: "POST",
			url: '/admin/vuelos/eliminar',
			data: { id: id}
		}).done(function( response ) {		
			var resp = eval('(' + response + ')');
			var msg= (resp.msg)? resp.msg : '';
			var title;
			if ( resp.success == true	){
				icon='/images/yes.png';
				title= 'Success';				
				var gridPedidos=$(me.tabId+" #lista_de_vuelos");				
				gridPedidos.wijgrid('ensureControl', true);  
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
}