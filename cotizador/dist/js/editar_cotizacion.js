
		$(document).ready(function(){
			load(1);
			$("#resultados").load('./ajax/editar_cotizador.php');
			
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
        url: "./ajax/editar_cotizador.php",
        data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad+"&descuento="+descuento,
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
			
			$.ajax({
        type: "GET",
        url: "./ajax/editar_cotizador.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}
		
		function ver_cotizacion(id_cotizacion){
			VentanaCentrada('ver_cotizacion.php?id='+id_cotizacion,'Cotizacion','','1024','768','true');
		}
		 
		function update_cotizacion(campo,valor){
			var parametros = {"action":"update","campo":campo,"valor":valor};	
			$.ajax({
				type: "GET",
				url: "./ajax/editar_cotizador.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados").html(datos);
				}
					});
		} 
		 
	 	

			$(function() {
						$("#nombre_cliente").autocomplete({
							source: "./ajax/autocomplete/clientes.php",
							minLength: 2,
							select: function(event, ui) {
								event.preventDefault();
								$('#id_cliente').val(ui.item.id_cliente);
								$('#nombre_cliente').val(ui.item.nombre_cliente);
								$('#tel1').val(ui.item.movil);
								$("#email_contact" ).val("");
								$('#empresa').val(ui.item.nombre_comercial);
								$('#tel2').val(ui.item.fijo);
								$('#email').val(ui.item.email);
								update_cotizacion(1,ui.item.id_cliente);
								get_contact(ui.item.id_cliente);
							 }
						});
						 
						
					});
					
	$("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$("#email_contact" ).val("");
							
							
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$("#email_contact" ).val("");
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
		var parametros = $(this).serialize();
		
		$.ajax({
			type: "POST",
			url: "./ajax/editar_cotizador.php",
			data: parametros+ "&moneda="+moneda,
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