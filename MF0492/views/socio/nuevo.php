<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>nuevo</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
    	<form method="POST" action="index.php?controlador=socio/store">
        	
        		<label>Nombre:</label>
        		<input type="text" name="nombre">
        		<br>
        		
        		<label>Apellidos:</label>
        		<input type="text" name="apellidos">
        		<br>
        		

        		<label>Teléfono:</label>
        		<input type="number" name="telefono">
        		<br>
        		
        		<label>Email:</label>
        		<input type="email"  name="email">
        		<br>
        		
        		<label>Población:</label>
        		<input type="text" name="población">
        		<br>
        		
        		<input type="submit" class="button" name="guardar" value="Guardar">
        	</form>
    	
    	<div class="centrado">
    		<a class="button" href="index.php?controlador=socio/list">Lista de socios</a>
    	</div>
		
				
	</body>

</html>