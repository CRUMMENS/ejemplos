<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<title>ejemplo1(PHP07)</title>
<link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
    <h1>EJEMPLOS PHP07</h1>
    <br>
    
    <h2>Formulario que permite introducir datos en la tabla 'temas'
    de la base de datos 'biblioteca':</h2>
    
    <form method="post" autocomplete="off">
    
    	<label>Tema:</label>
    	<input type="text" name="tema">
    	<br>
    	
    	<label>Descripción:</label>
    	<input type="text" name="descripcion">
    	<br>    
    	
    	<input type="submit" class="button" name="guardar" value="Guardar tema">	
    
    </form>
    
    
    <?php

    if(!empty($_POST['guardar'])) { 
        
        //crea una conexion con la BDD
        $conexion = new mysqli('localhost', 'root' , '' , 'biblioteca');
        $conexion->set_charset('utf8');
        
        //recupera los datos que vienen por POST
        $tema = $_POST['tema'];
        $descripcion = $_POST['descripcion'];
        
        //preparo la consulta de inserción
        $consulta = "INSERT INTO temas(tema, descripcion) 
                    VALUES ('$tema' , '$descripcion')";

        //ejecuto la consulta contra la BDD
        echo $conexion->query($consulta) ? 'Guardado OK' : 'No se pudo guardar';
                        
    }
    
    ?>

	</body>
</html>