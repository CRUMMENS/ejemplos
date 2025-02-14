<!DOCTYPE html>
<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	<title> Lista de libros </title>
    	
    	<link re l = "stylesheet" type = "text/css"
    		  href = "https://robertsallent.com/css/generic.css">
		  
	</head>
	
	<body>

        
        <h1> Detalles del libro <?= $libro->titulo ?></h1>
        
        <?php
        
            echo "<p>ISBN:   		<b>$libro->isbn</b></p>";
        	echo "<p>Título: 		<b>$libro->titulo</b></p>";
        	echo "<p>Editorial:		<b>$libro->editorial</b></p>";
        	echo "<p>Idioma: 		<b>$libro->idioma</b></p>";
        	echo "<p>Autor: 		<b>$libro->autor</b></p>";
        	echo "<p>Edicion:   	<b>$libro->edicion</b></p>";
        	echo "<p>Año:   		<b>$libro->anyo</b></p>";
        	echo "<p>Edad: 			<b>$libro->edadrecomendada</b></p>";
        	echo "<p>Portada: 		<b>$libro->portada</b></p>";
        	echo "<p>Características:<b>$libro->caracteristicas</b></p>";
        	echo "<p>Sinopsis:   	<b>$libro->sinopsis</b></p>";
        	echo "<p>Paginas:   	<b>$libro->paginas</b></p>";
            
        ?>
        
        
        <div class="centrado" >
            <a href="listar.php" class="button"> Volver al listado de libros </a>
        </div> 
   	
	</body>

</html>