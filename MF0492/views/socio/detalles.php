<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>detalles</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
		<h2>Detalles del socio</h2>
		<h3> <b><?= $socio->nombre?></b> <b><?= $socio->apellidos?></b></h3>
		
		<p><b>Id:</b>           <?= $socio->id?> </p>
		<p><b>Teléfono:</b>		<?= $socio->telefono?> </p>
		<p><b>Email:</b>		<?= $socio->email?> </p>
		<p><b>Población:</b>	<?= $socio->poblacion?> </p>

			
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>
		</div>
			
	</body>

</html>