<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Error</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
		<h1>Portada de la biblioteca</h1>
		
		<menu class="menu">
			<li><a href = "index.php" class="activo">Inicio</a>
			<li><a href = "index.php?controlador=libro/list">Lista de libros</a></li>
			<li><a href = "index.php?controlador=libro/create">Nuevo libro</a></li>
			<li><a href = "index.php?controlador=socio/list">Lista de socios</a></li>
			<li><a href = "index.php?controlador=socio/create">Nuevo socio</a></li>
		</menu>
		
		<h2>Bienvenido</h2>
		<p>- Esta es la portada de gestión de libros y socios de la base de datos "biblioteca"</p>
		
		<p>- Este ejemplo es un <b>MVC sencillo</b>, todas las peticiones pasarán  
		por el <b>index.php</b> , que actuará de dispatcher y gestionará todos 
		los errores.</p>
		
	</body>


</html>