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
        	
        		<input type="hidden" name="id" value="<?=$libro->id?>">
        		<br>
        		
        		<label>ISBN</label>
        		<input type="text" name="isbn" value="<?=$libro->isbn?>">
        		<br>
        		
        		<label>Titulo</label>
        		<input type="text" name="titulo" value="<?=$libro->titulo?>">
        		<br>
        		
        		<label>Editorial</label>
        		<input type="text" name="editorial" value="<?=$libro->editorial?>">
        		<br>
        		
        		<label>Autor</label>
        		<input type="text" name="autor" value="<?=$libro->autor?>">
        		<br>
        		
        		<label>Idioma</label>
        		<select name="idioma">
        			<option value="Castellano" <?=$libro->idioma=='Castellano' ? 'selected' : '' ?>>
        			Castellano</option>
        			
        			<option value="Catalán" <?=$libro->idioma=='Catalan' ? 'selected' : '' ?>>
        			Catalán</option>
        			
        			<option value="Otros" <?=$libro->idioma=='Otros' ? 'selected' : '' ?>>
        			Otros</option>
        		</select>
        		<br>
        		
        		<label>Edición</label>
        		<input type ="number" min="0" name="edicion"  value="<?= $libro->edicion?>">
        		<br>
        		
        		<label>Edad</label>
        		<input type="number" min="0" max="99" name="edadrecomendada"
        			   value="<?=$libro->edadrecomendada?>">
        		<br>
        		
        		<input type="submit" class="button" name="actualizar" value="Actualizar">
        		<input type="reset" class="button" value="Reset">
        	</form>
    	

				
	</body>

</html>