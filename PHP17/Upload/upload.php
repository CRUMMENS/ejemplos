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
	
		
		<pre>
		
		<?php 
		
		require_once 'exception/UploadException.php';
		require_once 'libraries/Upload.php';
		
		//sube el fichero, hace las comprovaciones y retorna la ruta
		$ruta = Upload::save(
		
		  'fichero' ,   //clave de $_FILES (nombre del input)
		  'imagenes',   //carpeta de destino
		  true,         //generar nombre unico
		  1048576,      //tamaño máximo
		  'image/*',    //tipo MIME(* es el comodín)
		  'img_',       //prefijo para el nombre generado
		  true          //retornar ruta completa?
    	  	
		);
		
		echo "<p>Éxito en la operación, fichero subido a $ruta.</p>";

		?>
		
		</pre>
	
	</body>

</html>