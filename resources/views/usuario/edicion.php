<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
<div class="container">
	<h1>Editar usuario: <?= $usuario->nombre ?> <?= $usuario->apellido ?> </h1>
	<a class="btn btn-primary" href="<?= URL::to('usuario/index') ?>">Volver</a>
	<br><br>
	<form action="<?= URL::to('usuario/editar') ?>" method="post">
		<table class="table table-bordered table-condensed table-hover">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="id" value="<?= $usuario->id ?>">
			<tbody>
				<tr>
					<td>
						Nombre
					</td>
					<td>
						<input type="text" class="form-control" value="<?= $usuario->nombre ?>" name="nombre" placeholder="Nombre">
					</td>
				</tr>
				<tr>
					<td>
						Apellido
					</td>
					<td>
						<input type="text" class="form-control" value="<?= $usuario->apellido ?>" name="apellido" placeholder="Apellido">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="btn btn-info" value="Editar">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
