$(document).ready(function(){
				$("#mod_depto").change(function () {
					$("#mod_depto option:selected").each(function () {
						q = $(this).val();
						$.post("dist/ajax/get_muni.php", { q: q }, function(data){
							$("#mod_muni").html(data);
						});
					});
				})
			});
	 /*  $(document).ready(function () {
				$("#mod_depto").on("change", function () {
					if ($("#mod_depto").val() == "") {
						$("#mod_muni").empty();
						$('<option value = "">Selecciona un municipio</option>').appendTo(
							"#mod_muni"
						);
						$("#mod_muni").attr("disabled", "disabled");
					} else {
						$("#mod_muni").removeAttr("disabled", "disabled");
						$("#mod_muni").load("dist/ajax/get_muni.php?q=" + $("#mod_depto").val());
					}
				});
			}); */