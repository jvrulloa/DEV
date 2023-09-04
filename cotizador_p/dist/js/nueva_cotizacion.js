
		$(document).ready(function(){
			load(1);
			load_data();
			
			// Example starter JavaScript for disabling form submissions if there are invalid fields
    
	
			
			
			
	
		});
		
		$("#datos_cotizacion").submit(function(){
		  var id_cliente = $("#id_cliente").val();
		  var id_contacto = $("#atencion").val();
		  var condiciones = $("#condiciones").val();
		  var validez = $("#validez").val();
		  var entrega = $("#entrega").val();
		  var notas = $("#notas").val();
		  var moneda=$("#moneda").val();
		  if (id_cliente==""){
			alert("Debes seleccionar el cliente");
			$("#nombre_cliente").focus();
			return false;
		  }
		
			/*VentanaCentrada('./pdf/documentos/cotizacion_pdf.php?id_cliente='+id_cliente+'&id_contacto='+id_contacto+'&condiciones='+condiciones+'&validez='+validez+'&entrega='+entrega+'&notas='+notas+'&moneda='+moneda,'Cotizacion','','1024','768','true');*/
		 
			//var parametros = {'id_cliente':id_cliente,'id_contacto':id_contacto,'condiciones':condiciones,'validez':validez,'entrega':entrega,'notas':notas,'moneda':moneda};
			
			var parametros = $(this).serialize();
			
			$.ajax({
					type: "POST",
					url: "ajax/nueva_cotizacion.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
				  }
			});
		  event.preventDefault();
  
  
			
			
	 	});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/productos_cotizacion.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

	function agregar (id)
		{
			var precio_venta=document.getElementById('precio_venta_'+id).value;
			var descuento=document.getElementById('descuento_'+id).value;
			var cantidad=document.getElementById('cantidad_'+id).value;
			var moneda=$("#moneda").val();
			var tax=$("#taxes").val();
			
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('cantidad_'+id).focus();
			return false;
			}
			if (isNaN(descuento))
			{
			alert('Esto no es un numero');
			document.getElementById('descuento_'+id).focus();
			return false;
			}
			if (isNaN(precio_venta))
			{
			alert('Esto no es un numero');
			document.getElementById('precio_venta_'+id).focus();
			return false;
			}
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "./ajax/agregar_cotizador.php",
        data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad+"&descuento="+descuento+"&moneda="+moneda+'&tax='+tax,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});
		}
		
			function eliminar (id)
		{
			var moneda=$("#moneda").val();
			var tax=$("#taxes").val();
			$.ajax({
        type: "GET",
        url: "./ajax/agregar_cotizador.php",
        data: "id="+id+"&moneda="+moneda+'&tax='+tax,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}
		
		$("#datos_cotizacion").submit(function(){
			
		  
	 	});

			$(function() {
						$("#nombre_cliente").autocomplete({
							source: "./ajax/autocomplete/clientes.php",
							minLength: 2,
							select: function(event, ui) {
								event.preventDefault();
								$('#id_cliente').val(ui.item.id_cliente);
								$('#nombre_cliente').val(ui.item.nombre_cliente);
								$('#tel1').val(ui.item.movil);
								$('#atencion').val(ui.item.contacto);
								$('#empresa').val(ui.item.nombre_comercial);
								$('#tel2').val(ui.item.fijo);
								$('#email').val(ui.item.email);
								$('#email_contact').val("");
								
								get_contact(ui.item.id_cliente);
							 }
						});
						 
						
					});
					
	$("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$('#email_contact').val("");
							
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$('#email_contact').val("");
						}
			});				

			function get_contact(id_cliente){
				$("#atencion" ).load( "ajax/contactos_clientes.php?id_cliente="+id_cliente );
			}
			$('#atencion').on('change', function(e){ 
				var telefono = $(this).find("option:selected").data('telefono'); 
				var email_contact = $(this).find("option:selected").data('email'); 
				$("#tel1").val(telefono);
				$("#email_contact").val(email_contact);
			});
			
			function load_data(){
				var moneda=$("#moneda").val();
				var tax=$("#taxes").val();
				$( "#resultados" ).load( "ajax/agregar_cotizador.php?moneda="+moneda+"&tax="+tax );
			}
			
			
	$('#editModalItem').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var codigo = button.data('codigo')
	  var cantidad = button.data('cantidad')
	  var descripcion = button.data('descripcion')
	  var precio = button.data('precio')
	  var descuento = button.data('descuento')
	  var id = button.data('id') 
	  var modal = $(this)
	  modal.find('.modal-title').text('Editar Ítem')
	  modal.find('.modal-body #codigo_item').val(codigo)
	  modal.find('.modal-body #cantidad_item').val(cantidad)
	  modal.find('.modal-body #descripcion_item').val(descripcion)
	  modal.find('.modal-body #precio_item').val(precio)
	  modal.find('.modal-body #descuento_item').val(descuento)
	  modal.find('.modal-body #id_tmp').val(id)
	  
	  
	})
	
	
	$( "#editar_item" ).submit(function( event ) {
		var moneda=$("#moneda").val();
		var tax=$("#taxes").val();
		var parametros = $(this).serialize();
		
		$.ajax({
			type: "POST",
			url: "./ajax/agregar_cotizador.php",
			data: parametros+ "&moneda="+moneda+"&tax="+tax,
			 beforeSend: function(objeto){
				$("#resultados").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			$("#editModalItem").modal("hide");
			
			window.setTimeout(function() {
				$( "tr" ).removeClass( "table-info" );
			}, 5000);
			
		  }
		});		
	 event.preventDefault();
	})
	
	
	
		function descargar(id){
		 VentanaCentrada('ver_cotizacion.php?id='+id,'Cotizacion','','1024','768','true');
	 	}
	
	
	
	$( "#guardar_producto" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados2").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados2").html(datos);
					$('#guardar_datos').attr("disabled", false);
					$("#addModalProduct").modal("hide");
					load(1);
					remove_alert();
				  }
			});
		  event.preventDefault();
		})
		
		$('#addModalProduct').on('shown.bs.modal', function () {
			$("#codigo").focus();
			$('#guardar_producto').trigger("reset");
			
			$('#nombre').summernote({
			  toolbar: [
				// [groupName, [list of button]]
				['style', ['bold', 'italic', 'underline']],
				
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['link',['linkDialogShow', 'unlink']],
				
				
			  ],height: 150,
			  
			});
			
			$('#nombre').summernote('code', '');
			
			
		})
		
		$('#addModalClient').on('shown.bs.modal', function () {
			$('#guardar_cliente').trigger("reset");
			$("#cliente").focus();
		})
		
		
		
		$( "#guardar_cliente" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_cliente.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados2").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados2").html(datos);
					$('#guardar_datos').attr("disabled", false);
					$("#addModalClient").modal("hide");
					load(1);
					remove_alert();
				  }
			});
		  event.preventDefault();
		})
			
			
		function remove_alert(){
				window.setTimeout(function() {
					$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();
				});
				}, 5000); 
			}	
			
		function tax_value(value){
			
			
				var moneda=$("#moneda").val();
				$( "#resultados" ).load( "ajax/agregar_cotizador.php?moneda="+moneda+"&tax="+value );
		}	
