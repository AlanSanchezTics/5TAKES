$(function(){
	$('#cmbgrupo').change(function()
	{
		var el_grupo = $(this).val();
		$.post( 'materias.php', { continente: el_grupo} ).done( function( respuesta )
		{
			$( '#cmbmateria' ).html( respuesta );
		});
	});
	
	

})
