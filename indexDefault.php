<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
<link rel="stylesheet" href="../sgp/css/bootstrap.css">
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



		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Pesquisar</h3>
			</div>
			<div class="panel-body">
		
				<form class="form-horizontal" role="form">

				<div class="form-group">
				
				    <div class="col-sm-3">
				      <label for="inputEmail3">Email</label>
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				
				<div class="col-sm-4">
				   <label for="inputPassword3">Password</label>
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  
				  
				  <div class="col-sm-4">
			    	<label for="" >Selecione</label>				        
						<select class="form-control">
						  <option></option>
						  <option>allsjh</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>	
				  </div>
				  
			  </div>
				  
							  
				  
				  <div class="form-group">
				    <div class="col-sm-12">
				      <button type="submit" class="btn btn-primary">
				      	<span class="glyphicon glyphicon-search"></span> Pesquisar
				      </button>
				    </div>
				  </div>
				  
				</form>
								
		
			</div>
		</div>



		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Resultado(s)</h3>
			</div>
			<div class="panel-body">


				<table id="table-bootstrap" class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr class="info">
							<th>#</th>
							<th>Bill</th>
							<th>Payment Date</th>
							<th>Payment Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-md-1">
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle"
										data-toggle="dropdown">
										Opções <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#"><span class="glyphicon glyphicon-pencil"></span>
												Editar</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-search"></span>
												Visualizar</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-file"></span>
												Assentamento</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-download-alt"></span>
												Exportar</a></li>
									</ul>
								</div>
							</td>
							<td>Credit Card</td>
							<td>04/08/2013</td>
							<td>Call in to confirm</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Water</td>
							<td>01/08/2013</td>
							<td>Paid</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Electricity</td>
							<td>03/08/2013</td>
							<td>Pending</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Telephone</td>
							<td>06/08/2013</td>
							<td>Due</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Credit Card</td>
							<td>04/08/2013</td>
							<td>Call in to confirm</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Water</td>
							<td>01/08/2013</td>
							<td>Paid</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Electricity</td>
							<td>03/08/2013</td>
							<td>Pending</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Telephone</td>
							<td>06/08/2013</td>
							<td>Due</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Credit Card</td>
							<td>04/08/2013</td>
							<td>Call in to confirm</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Water</td>
							<td>01/08/2013</td>
							<td>Paid</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Electricity</td>
							<td>03/08/2013</td>
							<td>Pending</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Telephone</td>
							<td>06/08/2013</td>
							<td>Due</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Credit Card</td>
							<td>04/08/2013</td>
							<td>Call in to confirm</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Water</td>
							<td>01/08/2013</td>
							<td>Paid</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Electricity</td>
							<td>03/08/2013</td>
							<td>Pending</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Telephone</td>
							<td>06/08/2013</td>
							<td>Due</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Credit Card</td>
							<td>04/08/2013</td>
							<td>Call in to confirm</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Water</td>
							<td>01/08/2013</td>
							<td>Paid</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Electricity</td>
							<td>03/08/2013</td>
							<td>Pending</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Telephone</td>
							<td>06/08/2013</td>
							<td>Due</td>
						</tr>

					</tbody>
				</table>

			</div>
		</div>


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
	<script src="js/jquery.dataTables.js"></script>	
	<script src="js/my-data-table.js"></script>		
		
</body>
</html>