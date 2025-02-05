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
		
		// si se produjo error ... 
		if ($codigo=$_FILES['fichero']['error'])
		    throw new Exception('ERROR, con código: '.$codigo);
		    
		// recupera la ruta que se le asigna al fichero en la carpeta temporal
		$rutaTemporal= $_FILES['fichero']['tmp_name'];
		
		// recupera el nombre original del fichero
		$nombreFichero= $_FILES['fichero']['name'];
		
		// esta será la ruta final donde ubicaremos el archivo, debe ser accesible
		$rutaFinal= "imagenes/$nombreFichero";
		
		//mueve el fichero de la ruta temporal a la ruta final
		if(!move_uploaded_file($rutaTemporal, $rutaFinal))
		    throw new Exception('Error al mover el fichero');
		    
	   //si todo fué bien ...
		echo 'El fichero se movió correctamente'; 
		
		
		
		?>
		
		</pre>
	
	</body>

</html>