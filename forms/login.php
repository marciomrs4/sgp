<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
<link rel="stylesheet" href="../../css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="col-sm-6 col-sm-offset-3 container-fluid">
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation"></nav>

		<div class="panel panel-primary">
			<div class="panel-heading panel-title">
				SGP - Sistema De Gestão de Portaria - Login
			</div>
			<div class="panel-body well">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<form class="form-horizontal" id="formlogin" method="post" role="form">
							<div class="form-group">
								<label for="inputUsuario">Usuário</label> <input type="text" name="usuario"
									class="form-control" id="inputUsuario" placeholder="Usuário"><br>
								<label for="inputSenha">Senha</label> <input type="password" name="senha"
									class="form-control" id="inputSenha" placeholder="Senha"> <br>
								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-log-in"></span> Acessar
								</button>
								<span id="carregando"></span>
							</div>
						</form>
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<div class="panel-body">
							<img src="../../img/logotipo.png" class="img-responsive img-rounded" alt="Logotipo Ceadis">
						</div>
					</div>
				</div>
				<div>
					<span id="dadosform"></span>
				</div>
			</div>
			<div class="panel-heading panel-title">
				 ..:: Tecnologia da Informação - Ceadis ::..
			</div>
		</div>
		
	</div>
	
	<script src="../../js/jquery.js"></script>
	<script src="../../js/jquery-form.js"></script>		
	<script src="../../js/my-jquery-form.js"></script>			
	
</body>