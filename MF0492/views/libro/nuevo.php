<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>nuevo</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
    	<form method="POST" action="index.php?controlador=libro/store">
        	
        		<label>ISBN</label>
        		<input type="text" name="isbn">
        		<br>
        		
        		<label>Titulo</label>
        		<input type="text" name="titulo">
        		<br>
        		
        		<label>Editorial</label>
        		<input type="text" name="editorial">
        		<br>
        		
        		<label>Autor</label>
        		<input type="text" name="autor">
        		<br>
        		
        		<label>Idioma</label>
        		<select name="idioma">
        			<option value="Castellano">Castellano</option>
        			<option value="Catalán">Catalán</option>
        			<option value="Otros">Otros</option>
        		</select>
        		<br>
        		
        		<label>Edición</label>
        		<input type="number" min="0" name="edicion">
        		<br>
        		
        		<label>Edad</label>
        		<input type="number" min="0" max="99" name="edadrecomendada">
        		<br>
        		
        		<input type="submit" class="button" name="guardar" value="Guardar">
        	</form>
    	
    	<div class="centrado">
    		<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>
    	</div>
		
				
	</body>

</html>