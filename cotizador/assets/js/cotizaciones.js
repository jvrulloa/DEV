		$(document).ready(function(){
			load(1);
			
		$('input[name="daterange"]').daterangepicker(
		{
			locale: {
			  format: 'DD/MM/YYYY', //Fecha en español
			  "applyLabel": "Aplicar",
			  "cancelLabel": "Cancelar",
			  "daysOfWeek": ["Do","Lu","Ma","Mi","Ju","Vi","Sa"],
			  "monthNames": ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
			}
		}
	
		);
	
	$('#daterange').on('apply.daterangepicker', function(ev, picker) {
	  //do something, enviar los datos via ajax con la funcion load()
	  load(1);
	});
	
			
			
		});

		function load(page){
			var q= $("#q").val();
			var id_vendedor= $("#id_vendedor").val();
			var daterange= $("#daterange").val();
			var estado= $("#status").val();
			
			var parametros ={"action":"ajax","page":page,"q":q,"id_vendedor":id_vendedor,"daterange":daterange,"estado":estado};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_cotizacion.php',
				data: parametros,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif">');
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
		  text: "Realmente deseas eliminar la cotización",
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
				url: "./ajax/buscar_cotizacion.php",
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
	
		
			
		
		function descargar(id){
		 VentanaCentrada('ver_cotizacion.php?id='+id,'Cotizacion','','1024','768','true');
	 	}
		function reporte(){
		var daterange=$("#daterange").val();
		var id_vendedor=$("#id_vendedor").val();
		var estado=$("#status").val();
		var q=$("#q").val();
		 VentanaCentrada('reporte_cotizacion.php?daterange='+daterange+"&id_vendedor="+id_vendedor+"&q="+q+"&estado="+estado,'Reporte cotizacion','','1024','768','true');
		}
		
		$('#myModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var email = button.data('email') // Extract info from data-* attributes
		  var quote_id = button.data('number') // Extract info from data-* attributes
		  var modal = $(this)
			$('#sendto').val(email)
			$('#quote_id').val(quote_id)
		})
		
		
		
		$( "#enviar_cotizacion" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "mail_cotizacion.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".resultados_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".resultados_ajax").html(datos);
					$('#guardar_datos').attr("disabled", false);
					
				  }
			});
		  event.preventDefault();
		})
