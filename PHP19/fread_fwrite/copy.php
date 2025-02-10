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
		
		$origen  = 'imagenes/gato1.png'
        $destino = 'imagenes/copia.png'

        //si el fichero existe y es legible ...
		if (!is_readdable($origen)){
		    throw new Exception("No se puede leer de $origen");
		}

		//abre para lectura y escritura en modo binario
		$handlerOrigen  = fopen($origen,'rb');
		$handlerDestino = fopen($origen,'rb');
		
		//lee el fichero en bloques de 256 bytes
		while($buffer = fread($handlerOrigen, 256))
		    fwrite($handlerDestino, $buffer,256);
		    
		fclose($handlerOrigen) ;   //cierra el fichero origen
		fclose($handlerDestino);   //cierra el fichero origen
		
		
		?>
		
		</ul>
	
	</body>

</html>