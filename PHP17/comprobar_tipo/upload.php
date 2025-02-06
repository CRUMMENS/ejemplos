<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> File upload  </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
    	<script src = 'js/Preview.js'></script>
	
	</head>
	
	<body>
	
		<h2> Datos del fichero recibido en el servidor: </h2>
		
		<pre>
		
		<?php 
		
		//ruta del fichero en la carpeta temporal
		$ruta = $_FILES ['fichero']['tmp_name'];
		
		//FORMA ORIENTADA A OBJETO 
		$finfo = new finfo(FILEINFO_MIME_TYPE); //crea un nuevo objeto finfo
		echo $finfo->file($ruta).'<br>';        //muestra el tipo
		
		
		?>
		
		</pre>
	
	</body>

</html>