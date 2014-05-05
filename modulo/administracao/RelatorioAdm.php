<?php
include '../../componente/topo.php';
include '../../componente/menuprincipal.php';


include '../../modulo/administracao/ModuloAdministracao.php';
?>

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




<?php 
include '../../componente/rodape.php';
?>