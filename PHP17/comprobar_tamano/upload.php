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
		
		// si se produce algun error en la subida , lanza una excepción
		if ($codigo=$_FILES['fichero']['error']) {
		    throw new Exception('ERROR, con código: '.$codigo);
		}
		
	    //comprobaremos que el tamaño no sea superior a 1.240.000 bytes
	    $tamano =$_FILES['fichero']['size'];
	    
	    if($tamano > 1240000) {
	        throw new Exception('El fichero supera el tamaño permitido.');
	    }
	    
	    //si todo ha ido bien ...
        echo "<p>El tamaño es $tamano bytes , el fichero es correcto.</p>";
		
		
		?>
		
		</pre>
	
	</body>

</html>