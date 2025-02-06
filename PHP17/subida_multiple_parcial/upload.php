
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
		 
		require_once 'exceptions/UploadException.php';
		require_once 'libraries/Upload.php';
		
		//para cada clave en $_FILES (para cada fichero subido)
		foreach($_FILES as $clave=>$valor ){
		    
		    //intenta guardar el fichero
		    try {
		        $nombre=$_FILES[$clave]['name'];
		        
		        $ruta = Upload::save($clave, 'imagenes', true, 1048576,'image/*');
		        echo "<p>Fichero $nombre subido a $ruta.</p>";

		    }catch (UploadException $e){
		        echo "<p>ERROR en $nombre: ".$e->getMessage()."</p>";
		    }
		}
		
		
		?>
		
		</pre>
	
	</body>

</html>