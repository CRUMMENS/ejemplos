<?php
use RdKafka\Exception;
?>
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
		
		if($codigo = $_FILES['fichero']['error']) {      //controla errores
		    throw new Exception("ERROR con codigo $codigo.");
		}
		
		
		if($_FILES['fichero']['size'] > 1240000) {      //controla el tamaño
		    throw new Exception('El fichero supera el tamaño permitido');
		}
		 
		
		$nombre = $_FILES['fichero']['name'] ;          //nombre del fichero original
		$rutaTemporal = $_FILES['fichero']['tmp_name'];  //ruta del fichero temporal
		
		
		//recuperar el tipo MINE del fichero con FileInfo
		$tipoMine = (new finfo(FILEINFO_MIME_TYPE))->file($rutaTemporal);
		
		
		if(!preg_match("/^image/", $tipoMine)){         //comprobar que sea imagen
		    throw new Exception('El fichero no es de tipo imagen');
		}
		
		$rutaFinal = "imagenes/$nombre" ;               //Calcular la ruta final
		
		
		//mueve el fichero de la ruta temporal a la ruta final 
		if(!move_uploaded_file($rutaTemporal, $rutaFinal)){
		    throw new Exception("Error al mover el fichero $nombre.");
		}
		    
		echo "<p> El fichero $nombre se subió correctamente a $rutaFinal</p>";

		
		
		
		?>
		
		</pre>
	
	</body>

</html>