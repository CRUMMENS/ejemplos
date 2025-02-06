<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP17 - subida multiple parcial</title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	
	</head>
	
	<body>
	
		<h1>Subida múltiple de ficheros</h1>
		<p>Si alguno falla no se sube , pero el resto si.</p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Sube las fotos del producto: </label>
			<br>
			
			<input type="file" accept="image/*" name="fichero1">
			<br>
			
			<input type="file" accept="image/*" name="fichero2">
			<br>
			
			<input type="file" accept="image/*" name="fichero3">
			<br>
			
			<input type="submit" value="Enviar">
		
		</form>

	</body>

</html>