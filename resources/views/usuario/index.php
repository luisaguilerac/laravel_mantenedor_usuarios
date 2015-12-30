

<div class="container">
	<?= View::make('header'); ?>
	<h1>Usuarios</h1>
	<a class="btn btn-success" href="ingreso">Ingresar usuario</a>
	<a class="btn btn-warning" href="login">Cerrar sesion</a>
	<br><br>
	<table class="table table-bordered table-condensed table-hover">
		<thead>
			<tr>
				<th>
					Nombre
				</td>
				<th>
					Apellido
				</th>
				<th>
					Editar
				</th>
				<th>
					Eliminar
				</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($usuarios as $usuario) {
				?>
				<tr>
					<td>
						<?= $usuario->nombre; ?>
					</td>
					<td>
						<?= $usuario->apellido; ?>
					</td>
					<td>
						<a href="edicion/<?= $usuario->id ?>" class="btn btn-info" >Editar</a>
					</td>
					<td>
						<a href="eliminar/<?= $usuario->id ?>" class="btn btn-danger" >Eliminar</a>
					</td>
				</tr>
				<?php
			}

			?>
		</tbody>
	</table>
	<div id="ingreso"></div>
	<br>
	<button type="button" onclick="ingreso()" >Ingreso por ajax</button>
</div>
<script type="text/javascript">
	
	function ingreso()
	{

		$.ajax({
    // la URL para la petición
    url : 'ingreso',
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { id : 123 },
    // especifica si será una petición POST o GET
    type : 'GET',
	// el tipo de información que se espera de respuesta
    // la respuesta es pasada como argumento a la función
    success : function(data) {
    	$("#ingreso").html(data)
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
    	alert('Disculpe, existió un problema');
    }
});

	}


</script>
