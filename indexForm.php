<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<!--  PESQUISA -->
	<div class="container-fluid">

		<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

				<div class="btn-group">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-th-large"></span> Ceadis
					</button>
					<button data-toggle="dropdown"
						class="btn btn-default btn-lg dropdown-toggle">
						<span class="glyphicon glyphicon-arrow-down"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li class="divider"></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>
								Alterar Senha</a></li>
					</ul>
				</div>

			</div>



			<div class="nav navbar-left collapse navbar-collapse">
				<p class="navbar-text">SGP - SISTEMA DE GESTAO PORTARIA</p>
			</div>
			<div class="nav navbar-right collapse navbar-collapse"
				id="navbar-collapse-1">
				<button class="btn btn-default btn-lg ">
					<span class="glyphicon glyphicon-off"></span> Sair
				</button>
			</div>
		</nav>

		<nav class="navbar navbar-default" role="navigation"></nav>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Chamados</h3>
			</div>
			<div class="panel-body">

				<!-- Painel de ações -->

				<ul class="nav nav-pills">
					<li>
						<button type="submit" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-plus"></span> Novo
						</button>
					</li>
					<li>
						<button type="submit" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-search"></span> Pesquisar
						</button>
					</li>
					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-list-alt"></span> Relatório
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Another action</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>
										Separated link</a></li>
							</ul>
						</div>
					</li>
				</ul>

				<!-- Fim Painel de ações -->

			</div>
		</div>


			<?php include_once 'forms/cadastrar/controleEntrega.php'; ?>

		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom"
				role="navigation">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#este">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>


					<p class="navbar-text">..: SGP - Sistema De Gestão Portaria
						[Tecnologia da Informação] :..</p>

				</div>
				<div class="nav navbar-right collapse navbar-collapse" id="este">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-user"></span> Usuário
					</button>
				</div>


			</nav>
			<nav class="navbar navbar-default" role="navigation"></nav>

		</footer>

	</div>




	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
