$(document).ready(function(){

	$(".btn-primary").click(function(){
		
		
			var dados = $("#formlogin").serialize();
		 
			var icone = $('<img src="../../img/283.gif">');


			$.ajax({
					type: "POST",
					 url: "login.php",
					data: dados,
					
					beforeSend: function()
					{
						//alert('Teste');
						$(".btn-primary").hide();
						$("#carregando").html(icone);
						//alert('Teste');
					},
					
					complete: function()
					{
						alert('Complete');
				
					},
					
					success: function(data)
					{
						//alert('Sucess');
						
						$(icone).remove();
						$(".btn-primary").show();
						$("#dadosform").html(data);
						
					},
					
					error: function(){
						alert("Houve um erro na Requisicao");
					}
				});
			
			return false;
			
	});
	

});