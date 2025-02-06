<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP18 - listado de directorio </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
    	<script src = 'js/Preview.js'></script>
	
	</head>
	
	<body>
	
		<h1>Listado de directorio con readdir()</h1>
		
		<ul>
		
		<?php 
		
		$directorio = "imagenes";
		$archivos   = [] ;                  //array donde guardaremos los nombres
		$handler    = opendir($directorio); //abre el directorio
		
		//mientras haya entradas en el directorio
		while ($file = readdir($handler))
		    $archivos [] = $file;          //mete el nombre del fichero en el array
	
		closedir($handler);                //cierra el directorio
		sort($archivos);                   //ordena el array
		
		//lista los ficheros que hemos encontrado
		foreach($archivos as $archivo)
		    echo "<li>$directorio/$archivo</li>";

		?>
		
		</ul>
	
	</body>

</html>