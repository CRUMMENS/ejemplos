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
		
		//intenta ejecutar este código
		try {
		    //guarda el fichero en la carpeta imagenes
		    $ruta = Upload::save (
		          'fichero','imagenes', true , 1048576, 'image/*','img_'
    	    );
		    
		//si todo ha ido bien , llegará a mostrar este mensaje
		echo "<p>éxito en la operación , fichero subido a $ruta.</p>";
		    
		}catch(UploadException $e){
		    echo "<p> ERROR : ".$e->getMessage()."</p>";
		}

		?>
		
		</pre>
	
	</body>

</html>