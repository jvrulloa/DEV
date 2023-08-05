$(function(){

	// Lista de Continentes
	$.post( 'dist/include/get_departamentos.php' ).done( function(respuesta)
	{
		$( '#mod_depto' ).html( respuesta );
	});

	// lista de Paises	
	$('#mod_depto').change(function()
	{
		var deptoid = $(this).val();
		
		// Lista de Paises
		$.post( 'dist/include/get_municipios.php', { depto: deptoid} ).done( function( respuesta )
		{
			$( '#mod_muni' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	$( '#mod_muni' ).change( function()
	{
		var muni = $(this).children('option:selected').html();
		alert( 'Lista de Ciudades de ' + muni );
	});

})
