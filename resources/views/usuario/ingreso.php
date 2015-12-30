<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
<div class="container">
	<h1>Ingreso de usuario</h1>
	<a class="btn btn-primary" href="index">Volver</a>
	<br><br>
	<form action="ingresar" method="post">
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
						<input type="submit" class="btn btn-success" value="Ingresar">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
