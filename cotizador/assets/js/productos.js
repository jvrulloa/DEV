		$(document).ready(function(){
			load(1);
			
			
			
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

			
		});

		function load(page){
			var q= $("#q").val();
			var q2= $("#q2").val();
			var q3= $("#q3").val();
			parametros={"action":"ajax","q":q,"q2":q2,"q3":q3,"page":page};
			$.ajax({
				url:'./ajax/buscar_productos.php',
				data: parametros, 
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif">');
			  },
				success:function(data){
					$(".outer_div").html(data);
					$('#loader').html('');
					
				}
			})
		}

	
		
			function eliminar (id){
				
		Swal.fire({
		  title: 'Estas seguro?',
		  text: "Realmente deseas eliminar el producto",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, eliminarlo!',
		  cancelButtonText: "No, cancelar!",  
		}).then((result) => {
		  if (result.value) {
			var q= $("#q").val();
			
			$.ajax({
				type: "GET",
				url: "./ajax/buscar_productos.php",
				data: "id="+id,"q":q,
				 beforeSend: function(objeto){
					$("#resultados").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados").html(datos);
				load(1);
				}
			});
			
			
			
		  }
		})
		
			
		}
		
		
		function agregar_cotizacion(id_producto){
			var q= $("#q").val();
			var parametros={"q":q, "id_producto":id_producto};
			$.ajax({
				type: "GET",
				url: "./ajax/buscar_productos.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados").html(datos);
				hide(".alert");
				load(1);
				}
			});
			
			
		}
		
		function hide(elemento){
			window.setTimeout(function() {
			$(elemento).fadeTo(500, 0).slideUp(500, function(){
			$(this).remove();});}, 5000);
		}
		
		
		
		$( "#guardar_producto" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					$('#guardar_datos').attr("disabled", false);
					$("#addModalProduct").modal("hide");
					hide(".alert");//Funcion oculta los elementos con la clase alert
					load(1);
				  }
			});
		  event.preventDefault();
		})
		
		
		$( "#editar_producto" ).submit(function( event ) {
		  $('#actualizar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					$('#actualizar_datos').attr("disabled", false);
					$("#editModalProduct").modal("hide");
					hide(".alert");//Funcion oculta los elementos con la clase alert
					load(1);
				  }
			});
		  event.preventDefault();
		})
		
		
		
		function obtener_datos(id){
			var codigo_producto = $("#codigo_producto"+id).val();
			var modelo_producto = $("#modelo_producto"+id).val();
			var nombre_producto = $("#nombre_producto"+id).val();
			var fabricante = $("#fabricante"+id).val();
			var estado = $("#estado"+id).val();
			var precio_producto = $("#precio_producto"+id).val();
			var descripcion = $("#descripcion"+id).html();
			
			$("#mod_id").val(id);
			$("#mod_codigo").val(codigo_producto);
			$("#mod_modelo").val(modelo_producto);
			$("#mod_nombre").val(nombre_producto);
			$("select#mod_fabricante option")
			.each(function() { this.selected = (this.text == fabricante); });
			$("select#mod_estado option")
			.each(function() { this.selected = (this.text == estado); });
			$("#mod_precio").val(precio_producto);
			
			$('#mod_nombre').summernote({
			  toolbar: [
				// [groupName, [list of button]]
				['style', ['bold', 'italic', 'underline']],
				
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['link',['linkDialogShow', 'unlink']],
				
				
			  ],height: 100,
			});
			$('#mod_nombre').summernote('code', descripcion);
		}

		
		
		$("#importar_datos" ).submit(function(event) {
			 $.ajax({
					type: "POST",
					url: "ajax/importar_productos.php",
					data:  new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
						$(".importar_datos").html("<i class='fa fa-spinner fa-spin'></i> Importando...");
						$('.importar_datos').attr("disabled", true);
					  },
					success: function(datos){
					$("#resultados").html(datos);
					
					window.setTimeout(function() {
					$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();});}, 5000);
					$('#importar_modal').modal('hide');
					$(".importar_datos").html("Importar datos");
					$('.importar_datos').attr("disabled", false);
					load(1);
				  } 
			});		
				event.preventDefault();
			
		  
		});
