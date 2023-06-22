		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_monedas.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

	
		
		function eliminar (id){

		Swal.fire({
		  title: 'Estas seguro?',
		  text: "Realmente deseas eliminar la moneda",
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
				url: "./ajax/buscar_monedas.php",
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
	
		
		$('#myModal2').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var nombre_moneda = button.data('nombre')
		  var simbolo = button.data('simbolo')
		  var precision = button.data('precision')
		  var millar = button.data('millar')
		  var decimal = button.data('decimal')
		  var codigo = button.data('codigo') 
		  var id = button.data('id') 
		  var modal = $(this)
		   $('#nombre_mod').val(nombre_moneda)
		   $('#simbolo_mod').val(simbolo)
		   $('#precision_mod').val(precision)
		   $('#millar_mod').val(millar)
		   $('#decimal_mod').val(decimal)
		   $('#codigo_mod').val(codigo)
		   $('#mod_id').val(id)
		   
		   $(".alert").hide();
		})
			

$( "#guardar_moneda" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nueva_moneda.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
  $(':input','#guardar_moneda').val('');
})

$( "#editar_moneda" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_moneda.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
			
		
		

