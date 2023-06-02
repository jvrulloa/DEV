		$(document).ready(function(){
			load(1);


		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'dist/ajax/buscar_clientes.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando pagina...');
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
		  text: "Realmente deseas eliminar el cliente",
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
				url: "./ajax/buscar_clientes.php",
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

		function remove_alert(){
				window.setTimeout(function() {
					$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();
				});
				}, 5000);
			}

$( "#guardar_cliente" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);

 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_cliente.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
			remove_alert();
		  }
	});
  event.preventDefault();
})

$( "#guardar_contacto" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);

 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_contacto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax_2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax_2").html(datos);
			$('.guardar_datos').attr("disabled", false);
			load(1);
			remove_alert();
		  }
	});
  event.preventDefault();

})

$( "#editar_contacto" ).submit(function( event ) {
  $('.actualizar_datos').attr("disabled", true);

 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_contacto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax_3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax_3").html(datos);
			$('.actualizar_datos').attr("disabled", false);
			load(1);
			remove_alert();
		  }
	});
  event.preventDefault();
})

$( "#editar_cliente" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);

 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_cliente.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
			remove_alert();
		  }
	});
  event.preventDefault();
})

function obtener_datos ( id )
{

	var dui_cliente = $( "#dui_cli_" + id ).val();
	var nombre_cliente = $( "#nombre_cli_" + id ).val();
	var tipo_cliente = $( "#tipo_cli_" + id ).val();
	var sts_cli = $( "#estado_cli_" + id ).val();
	var giro_cliente = $( "#giro_cli_" + id ).val();
	var nomcom_cliente = $( "#comercio_cli_" + id ).val();
	var dir_cliente = $( "#dir_cli_" + id ).val();
	var email_cliente = $( "#correo_cli_" + id ).val();
	var tel_cliente = $( "#tel_cli_" + id ).val();
	var nrc_cliente = $( "#nrc_cli_" + id ).val();
	var nit_cliente = $( "#nit_cli_" + id ).val();
	var mun_cliente = $( "#mun_cli_" + id ).val();
	var depto_cliente = $( "#depto_cli_" + id ).val();

	/*var cliente = $("#cliente"+id).val();
		var nombre_comercial = $("#nombre_comercial"+id).val();
		var nombre_producto = $("#nombre_producto"+id).val();
		var numero_identificacion = $("#numero_identificacion"+id).val();
		var giro = $("#giro"+id).val();
		var direccion = $("#direccion"+id).val();
		var web = $("#web"+id).val();
		var email = $("#email"+id).val();
		var movil = $("#movil"+id).val();
		var fijo = $("#fijo"+id).val();
		var contacto = $("#contacto"+id).val();*/

	$( "#mod_dui_cliente" ).val( dui_cliente );
	$( "#mod_nombre_cliente" ).val( nombre_cliente );
	$( "#mod_tipo_cliente" ).val( tipo_cliente );
	$( "#mod_estado_cliente" ).val( sts_cli );
	$( "#mod_giro" ).val( giro_cliente );
	$( "#mod_nomcom_cliente" ).val( nomcom_cliente );
	$( "#mod_direccion" ).val( dir_cliente );
	$( "#mod_email" ).val( email_cliente );
	$( "#mod_tel" ).val( tel_cliente );
	$( "#mod_registro" ).val( nrc_cliente );
	$( "#mod_nit" ).val( nit_cliente );
	$( "#mod_muni" ).val( mun_cliente );
	$( "#mod_depto" ).val( depto_cliente );
	$( "#mod_id" ).val( id );
	/*$("#mod_cliente").val(cliente);
		$("#mod_nombre_comercial").val(nombre_comercial);
		$("#mod_registro").val(numero_identificacion);
		$("#mod_giro").val(giro);
		$("#mod_direccion").val(direccion);
		$("#mod_web").val(web);
		$("#mod_email").val(email);
		$("#mod_fijo").val(fijo);
		$("#mod_movil").val(movil);
		$("#mod_contacto").val(contacto);*/

	//var id2 = $( "#mod_depto" ).val( depto_cliente );

	$.ajax({
		data: "id2=" + mun_cliente,
		url: "get_municipios.php",
		type: "post",
		dataType: "json",
		beforeSend: function () {},
		success: function (response) {
			var html = "";
			$.each(response, function (index, value) {
				html += '<option value="' + value.id + '">' + value.nombre + "</option>";
			});
			$("#mod_muni").html(html);
			$("#distritos").html("");
		},
	});
};

		function eliminar_contacto(id_contact){
			var q= $("#q").val();
			if (confirm("Realmente deseas eliminar el contacto")){

				$.ajax({
				type: "GET",
				url: "./ajax/buscar_clientes.php",
				data: "id_contact="+id_contact,"q":q,
				 beforeSend: function(objeto){
					$("#resultados").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados").html(datos);
				load(1);
				window.setTimeout(function() {
						$(".alert").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();

						});
							}, 5000);
				}
			});

			};
		}



				$('#agregar').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var cliente = button.data('cliente') // Extract info from data-* attributes
		  var id = button.data('id') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Agregar contacto a: ' + cliente)
		  modal.find('.modal-body #guardar_contacto #id_client').val(id)
		})

	$( '#edit' ).on( 'show.bs.modal', function ( event )
	{
		var button = $( event.relatedTarget ) // Button that triggered the modal
		var cliente = button.data( 'cliente' ) // Extract info from data-* attributes
		var nombre_contact = button.data( 'nombre_contact' ) // Extract info from data-* attributes
		var telefono_contact = button.data( 'telefono_contact' ) // Extract info from data-* attributes
		var email_contact = button.data( 'email_contact' ) // Extract info from data-* attributes
		var id_contact = button.data( 'id_contact' ) // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $( this )
		modal.find( '.modal-title' ).text( 'Editar contacto del cliente: ' + cliente )
		modal.find( '.modal-body #editar_contacto #id_contact' ).val( id_contact )
		modal.find( '.modal-body #editar_contacto #nombre_contact' ).val( nombre_contact )
		modal.find( '.modal-body #editar_contacto #telefono_contact' ).val( telefono_contact )
		modal.find( '.modal-body #editar_contacto #email_contact' ).val( email_contact )
	} );