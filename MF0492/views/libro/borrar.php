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
	   		<li><a href="index.php?controlador=libro/list">Lista de libros</a></li>
	   		<li><a href="index.php=controlador=libro/create">Nuevo libro</a></li>
	   	</menu>
	   	
	   	<h2>Confirmar borrado</h2>
		<p>Confirmar el borrado del libro <b><?= $libro->titulo?></b>.</p>
		
		<form method="POST" class="centrado" action="index.php?controlador=libro/destroy">
			<input type="hidden" name="id" value="<?= $id ?>">
			<input type="submit" class="button" name="confirmarborrado" value="Borrar">
		</form>
		
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>
		</div>
				
	</body>

</html>