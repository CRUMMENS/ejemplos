<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP18 - FileList </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
    	<script src = 'js/Preview.js'></script>
	
	</head>
	
	<body>
	
    	<main>
    	
    		<h1 class='centered'> Galeria </h1>
    		
    		<secction class="gallery w75 centered-block my2">
    		
    		<?php 
    
    		include 'libraries/FileList.php';  //carga la libreria
    		
    		//usamos el método estátito FileList::get()
    		//primer parámetro: directorio (opcional , por defecto la carpeta actual)
    		//segundo parámetro: expresión regular o lista de extensiones (opcional)
    		$archivos = FileList::get('imagenes','/\.(gif|jpe?g|png)$/i');
    		
    		//con una lista de extensiones queda más sencillo:
    		//$archivos = FileList::get('imagenes', ['gif','jpg','jpeg','png']);
    		
    		//genera las figuras de la galeria
    		foreach($archivos as $archivo) { 
    		    ?> 
    		    <figure class='small card'>
    		    <img src='<?= $archivo ?>'>
    		    <figcaption> <?= $archivo ?> </figcaption>
    		    </figure>
    		    
    		<?php } ?>
    
    		
    		
    		</secction>
    
    	</main>
	
	</body>

</html>