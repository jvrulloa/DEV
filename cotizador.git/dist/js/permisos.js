		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/permisos_ajax.php?action=ajax&page='+page+'&query='+q+'&per_page=15',
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

	
//Checked all
$('#all_ver').change(function() {
    var checkboxes = $(".ck");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_mod').change(function() {
    var checkboxes = $(".ck1");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_del').change(function() {
    var checkboxes = $(".ck2");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});

//Checked all 2
function checked_all(){
$('#all_ver2').change(function() {
    var checkboxes = $(".ck");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_mod2').change(function() {
    var checkboxes = $(".ck1");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_del2').change(function() {
    var checkboxes = $(".ck2");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
}	
	//Guardar los datos	
$( "#guardar_permisos" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/registro/agregar_permisos.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
			window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove();});}, 5000);
			$('#permisos_modal').modal('hide');
		  }
	});
  event.preventDefault();
})		

			function eliminar (id){

		Swal.fire({
		  title: 'Estas seguro?',
		  text: "Realmente deseas eliminar el rol de usuario",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, eliminarlo!',
		  cancelButtonText: "No, cancelar!",  
		}).then((result) => {
		  if (result.value) {
				var page=1;
				var query=$("#q").val();
				var per_page=15;
				var parametros = {"action":"ajax","page":page,"query":query,"per_page":per_page,"id":id};
			
				$.ajax({
					url:'./ajax/permisos_ajax.php',
					data: parametros,
					 beforeSend: function(objeto){
					$("#loader").html("<img src='./img/ajax-loader.gif'>");
				  },
					success:function(data){
						$(".outer_div").html(data).fadeIn('slow');
						$("#loader").html("");
						window.setTimeout(function() {
						$(".alert").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();});}, 5000);
					}
				})
			
			
			
		  }
		})
	}
	
		

	function editar(id){
			var parametros = {"action":"ajax","id":id};
			$.ajax({
					url:'modal/editar/permisos.php',
					data: parametros,
					 beforeSend: function(objeto){
					$("#loader2").html("<img src='./img/ajax-loader.gif'>");
				  },
					success:function(data){
						$(".outer_div2").html(data).fadeIn('slow');
						$("#loader2").html("");
						checked_all();
					}
				})
		}		
		
	$( "#editar_permisos" ).submit(function( event ) {
	  $('#actualizar_datos').attr("disabled", true);
	 var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "ajax/modificar/permisos.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados_ajax").html("Enviando...");
				  },
				success: function(datos){
				$("#resultados_ajax").html(datos);
				$('#actualizar_datos').attr("disabled", false);
				load(1);
				window.setTimeout(function() {
				$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();});}, 5000);
				$('#permisos_edit').modal('hide');
			  }
		});
	  event.preventDefault();
	})	
		

