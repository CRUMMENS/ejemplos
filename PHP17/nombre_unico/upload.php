
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
		 
		if($codigo = $_FILES['fichero']['error']) {            //controla errores
		    throw new Exception("ERROR con codigo $codigo.");
		}
		
		
		$rutaTemporal = $_FILES['fichero']['tmp_name'];
		
		$nombre = $_FILES['fichero']['name'];                 //nombre del fichero
		$extension = pathinfo($nombre , PATHINFO_EXTENSION);  //extension
		
		$nuevoNombre = uniqid('file_');                       //Genera nombre unico
		
		//calculo de la ruta final
		$rutaFinal = "files/$nuevoNombre.$extension";
		
		//mueve el fichero de la ruta temporal a la ruta final 
		if(!move_uploaded_file($rutaTemporal, $rutaFinal)) {
		    throw new Exception("Error al mover el fichero $nombre.");
		}

		echo "<p> El fichero $nombre se subio correctamente a $rutaFinal.</p>";
		
		
		?>
		
		</pre>
	
	</body>

</html>