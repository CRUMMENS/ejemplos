<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>borrar</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
	   	<h1>Confirmar borrado</h1>
	   	
	   	<menu>
	   		<li><a href="index.php">Inicio</a></li>
	   		<li><a href="index.php?controlador=socio/list">Lista de socios</a></li>
	   		<li><a href="index.php=controlador=socio/create">Nuevo socio</a></li>
	   	</menu>
	   	
	   	<h2>Confirmar borrado</h2>
		<p>Confirmar el borrado del socio <b><?= $socio->nombre?></b> <b><?= $socio->apellidos?></b>.</p>
		
		<form method="POST" class="centrado" action="index.php?controlador=socio/destroy">
			<input type="hidden" name="id" value="<?= $id ?>">
			<input type="submit" class="button" name="confirmarborrado" value="Borrar">
		</form>
		
		<div class="centrado">
			<a class="button" href="index.php?controlador=socio/list">Lista de socios</a>
		</div>
				
	</body>

</html>