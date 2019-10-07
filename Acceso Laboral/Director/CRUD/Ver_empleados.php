<?php
	require 'conexion.php';
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],//Indico que oordenaimieto y tambien con codigo ASCII
					"language":{//Aquí se configura el idioma a español
					/*"lengthMenu": "Mostrar solo _MENU_ registros por pagina",*///Se cambian los parametros que se necesitan erradicar
					"info": "Mostrando pagina _PAGE_ de _PAGES_",/*Muestra debajo de la tabla *///Todo
						"infoEmpty": "No se encuentran empleados",//Esto
						"infoFiltered": "(filtrada de _MAX_ registros)",//Es
						"loadingRecords": "Cargando...",//La 
						"processing":     "Procesando...",//Configuración
						"search": "Buscar:",//En futuro no sirvirá para modificarlo
						"zeroRecords":    "No se encuentran empleados",
						"paginate": {
							"next":       "Siguiente",//Igual otra traducción
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,//Si va procesar información, 
					"bServerSide": true,//Nos mostrará el servidor
					"sAjaxSource": "server_process.php"//Y de donde vamos a tomar el archivo
				});	
			});
			
		</script>
		
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Curso de PHP y MySQL</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	