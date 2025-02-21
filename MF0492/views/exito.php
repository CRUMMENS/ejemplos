<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Exito libro</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
		<h1>Éxito</h1>
		
		<menu class="menu">
			<li><a href = "index.php">Inicio</a>
			<li><a href = "index.php?controlador=libro/list">Lista de libros</a></li>
			<li><a href = "index.php?controlador=libro/create">Nuevo libro</a></li>

		</menu>
		
		<div class="succes">
			<h2>Éxito</h2>
			<p><?= $mensaje ?></p>
		</div>
		
		<div class="centrado">
			<a class="button" href = "index.php?controlador=libro/list">Lista de libros</a>
		</div>

				
	</body>

</html>