var ListaVuelos=function(){
}
ListaVuelos.prototype.init=function(){
	
		var pageSize=10;
		var hContainer = $('#tabs').height();

		var hNav= $('#tabs .ui-tabs-nav').height();

		var newH = hContainer-hNav;
		var altoHeaderGrid = 38;

		newH=newH - (2*altoHeaderGrid);
		newH=parseInt(newH/altoHeaderGrid);
		pageSize=newH-1;		

		//var totalRows=<?php //echo isset($this->total)?$this->total: 0 ?>;
		var dataReader = new wijarrayreader([
			{ name: "id"  },
			{ name: "fecha"},
			{ name: "nombreAlmacen"}
		]);

		var dataSource = new wijdatasource({
			proxy: new wijhttpproxy({
				url: "/pedidoi/paginar",
				dataType: "json"
			}),
			dynamic:true,			
			reader:new wijarrayreader([
				 { name: "id"},
				 { name: "fecha"},
				 { name: "nombreAlmacen"}
			])							
		});
		dataSource.reader.read= function (datasource) {
			
			var totalRows=datasource.data.totalRows;			
			datasource.data = datasource.data.rows;
			datasource.data.totalRows = totalRows;
			dataReader.read(datasource);
		};				
		this.dataSource=dataSource;
		var gridPedidos=$("#lista_pedidos_internos");

		// gridPedidos.wijgrid();
		var me=this;
		gridPedidos.wijgrid({
			dynamic: true,
			allowColSizing:true,
			//allowEditing:false,
			allowKeyboardNavigation:true,
			allowPaging: true,
			pageSize:pageSize,
			selectionMode:'singleRow',
			data:dataSource,
			columns: [ { dataKey: "id", hidden:true, visible:false, headerText: "ID" },{dataKey: "nombreAlmacen", headerText: "Almac&eacute;n",width:'80%' }, {dataKey: "fecha", headerText: "Fecha",width:'20%' } ],
			rowStyleFormatter: function(args) {
				if (args.dataRowIndex>-1)
					args.$rows.attr('pedidoId',args.data.id);
			},
			loading: function (dataSource, userData) {                            
				var fi=$('#tabs '+me.tabId+' .txtFechaI').val();	
				var ff=$('#tabs '+me.tabId+' .txtFechaF').val();			
                me.dataSource.proxy.options.data={fechai:fi, fechaf:ff};
            },
			cellStyleFormatter: function(args) { 
				if (args.column._originalDataKey=='fecha'){
					// console.log(args);		
					args.$cell.addClass("colFecha");
				}			
			} 
		});
		
		var me=this;
		
		gridPedidos.wijgrid({ selectionChanged: function (e, args) { 					
			var item=args.addedCells.item(0);
			var row=item.row();
			var data=row.data;			
			me.selected=data;			
		} });
		
		gridPedidos.wijgrid({ loaded: function (e) { 
			$('#lista_pedidos_internos tr').bind('dblclick', function (e) { 			
				var pedidoId=$(e.currentTarget).attr('pedidoId');
				if (pedidoId==undefined || pedidoId=='' || pedidoId==0) return false;				
				TabManager.add('/pedidoi/getPedido','Editar Pedido',pedidoId);				
			});			
		} });
}