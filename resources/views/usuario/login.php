<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
<div class="container">
	<h1>Login</h1>
	<br><br>
	<form action="logear" method="post">
		<table class="table table-bordered table-condensed table-hover">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<tbody>
				<tr>
					<td>
						Nombre
					</td>
					<td>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</td>
				</tr>
				<tr>
					<td>
						Apellido
					</td>
					<td>
						<input type="text" class="form-control" name="apellido" placeholder="Apellido">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="btn btn-danger" value="Logear">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
