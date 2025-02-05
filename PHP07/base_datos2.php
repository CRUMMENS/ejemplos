<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<title>ejemplo2(PHP07)</title>
<link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
    <h1>EJEMPLOS PHP07</h1>
    <br>
    
    <h2>Formulario que permite introducir datos en la tabla 'socios'
    de la base de datos 'biblioteca':</h2>
    
    <form method="post" autocomplete="off">
    
    	<label>dni:</label>
    	<input type="text" name="dni">
    	<br>
    	
    	<label>nombre:</label>
    	<input type="text" name="nombre">
    	<br>    
    	    	
    	<label>apellidos:</label>
    	<input type="text" name="apellidos">
    	<br>    
    	    	
    	<label>nacimiento:</label>
    	<input type="date" name="nacimiento">
    	<br>    
    	    	
    	<label>direccion:</label>
    	<input type="text" name="direccion">
    	<br>    
    	    	
    	<label>poblacion:</label>
    	<input type="text" name="poblacion">
    	<br>    
    	    	
    	<label>cp:</label>
    	<input type="text" name="cp">
    	<br>    
    	    	
    	<label>provincia:</label>
    	<input type="text" name="provincia">
    	<br>    
    	    	
    	<label>telefono:</label>
    	<input type="text" name="telefono">
    	<br>    
    	
    	<label>email:</label>
    	<input type="text" name="email">
    	<br>    

    	
    	<input type="submit" class="button" name="guardar" value="Guardar socio">	
    
    </form>
    
    
    <?php

    if(!empty($_POST['guardar'])) { 
        
        //crea una conexion con la BDD
        $conexion = new mysqli('localhost', 'root' , '' , 'biblioteca');
        $conexion->set_charset('utf8');
        
        //recupera los datos que vienen por POST
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $nacimiento = $_POST['nacimiento'];
        $direccion = $_POST['direccion'];
        $poblacion = $_POST['poblacion'];
        $cp = $_POST['cp'];
        $provincia = $_POST['provincia'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        
        //preparo la consulta de inserción
        $consulta = "INSERT INTO socios(dni, nombre, apellidos , nacimiento , direccion , 
                    poblacion , cp , provincia , telefono , email ) 
                    VALUES ('$dni' , '$nombre' , '$apellidos' , '$nacimiento' , '$direccion' , 
                    '$poblacion' , '$cp', '$provincia' , '$telefono' , '$email')";

        //ejecuto la consulta contra la BDD
        
        echo $consulta;
        echo $conexion->query($consulta) ? 'Guardado OK' : 'No se pudo guardar';
                        
    }
    
    ?>

	</body>
</html>