$(document).ready(function(){
	$('#table-bootstrap').dataTable({
		"oLanguage": {
			"oPaginate":{
				"sPrevious": "Anterior ",
				"sNext": "Proximo"	
					},
				"sLengthMenu": "Mostrar _MENU_ entradas",
				"sSearch": "Pesquisar: ",
				"sInfo": "Mostrando _START_ a _END_",
				"sInfoFiltered": "de _MAX_ resultado(s)",
				"sZeroRecords": "Resultado nao encontrado",
				"sInfoEmpty": "Sem resultados"
		}
	});
});