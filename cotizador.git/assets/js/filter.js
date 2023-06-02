$(document).ready(function(){
				$("#q1").change(function () {
					$("#q1 option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("ajax/items.php", { id_municipio: id_municipio }, function(data){
							$("#q2").html(data);
						});            
					});
				})
			});
	