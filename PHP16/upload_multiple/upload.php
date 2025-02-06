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
		
		//para cada entrada de $_FILE ....
		foreach($_FILES as $fichero){
		    
		    //si no hay error ...
		    if(!$error = $fichero['error']){
		        
		        $nombreFichero = $fichero['name'];     //nombre del fichero
		        $rutaTemporal = $fichero['tmp_name'];  //ruta temporal
		        $rutaFinal = "files/$nombreFichero";   //ruta final
		        
		        //mueve el fichero de la ruta temporal a la ruta final
		        echo move_uploaded_file($rutaTemporal, $rutaFinal) ? 
		          "<p>Fichero $nombreFichero movido correctamente.</p>":
		          "<p>Error al mover el fichero $nombreFichero.</p>";
		    
		    //si hay error
		    }else 
		        echo "<p>ERROR con codigo $error.</p>·";
            }

		?>
		
		</pre>
	
	</body>

</html>