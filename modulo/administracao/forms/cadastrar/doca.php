<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="post" action="" role="form">
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label">Doca:</label>
				<div class="col-sm-4">
					<input type="text" name="doca" value="<?php echo $_POST['doca'];?>" class="form-control" id="inputEmail3"
						placeholder="Descricao">
				</div>
			</div>
			
			<div class="form-group">
				<label for="" class="col-sm-1 control-label">Descri��o</label>
				<div class="col-sm-4">
					<textarea class="form-control" name="descricao" rows="3"></textarea>
				</div>
			</div>			
			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-1">
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
					</button>
				</div>
			</div>
			
		</form>
	</div>
</div>