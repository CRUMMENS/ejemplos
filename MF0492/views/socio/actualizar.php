<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Actualizar</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
    	<form method="POST" action="index.php?controlador=libro/update">
        	
        		<input type="hidden" name="id" value="<?=$socio->id?>">
        		<br>
        		
        		<label>Nombre</label>
        		<input type="text" name="nombre" value="<?=$socio->nombre?>">
        		<br>
        		
        		<label>Apellidos</label>
        		<input type="text" name="apellidos" value="<?=$socio->apellidos?>">
        		<br>
        		
        		<label>DNI</label>
        		<input type="text" name="dni" max="9" value="<?=$libro->dni?>">
        		<br>

        		<label>Teléfono</label>
        		<input type ="number" name="telefono"  value="<?= $libro->telefono?>">
        		<br>
        		
        		<label>Email</label>
        		<input type="email" name="email" value="<?=$libro->email?>">
        		<br>
        		
        		<label>Población</label>
        		<input type="text" name="poblacion" value="<?=$libro->poblacion?>">
        		<br>
        		
        		<input type="submit" class="button" name="actualizar" value="Actualizar">
        		<input type="reset" class="button" value="Reset">
        	</form>
    	

				
	</body>

</html>