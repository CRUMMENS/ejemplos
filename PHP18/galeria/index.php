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
	
		<h1>Galeria de fotos con readdir()</h1>
		
		<secction class="gallery w75 centered-block my2">
		
		<?php 
		
		$directorio = "imagenes";
		$archivos   = [] ;                   //array donde guardaremos los nombres
		$handler    = opendir($directorio);  //abre el directorio
		
		//mientras haya entradas en el directorio
		while ($file = readdir($handler))
		    if ($file!="." && $file!="..") { //evita el . y el ..
		        $archivos[] = $file;
		    }
		
		closedir($handler);
		sort($archivos);                     //ordena el array
		
		//crea tantas <img> como archivos haya en el directorio
		foreach ($archivos as $foto)
		    echo "<figure class='card'><img src='$directorio/$foto'></figure>";
		      

		?>
		
		</secction>
	
	</body>

</html>