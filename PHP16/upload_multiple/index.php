<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> File upload - Ejemplo con previsualización </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	
	</head>
	
	<body>
	
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Sube tres ficheros: </label>
			<br>
			
			<input type="hidden" name="MAX_FILE_SIZE" value="500000">
			<input type="file" name="fichero1">
			<br>
			
			<input type="hidden" name="MAX_FILE_SIZE" value="700000">
			<input type="file" name="fichero2">
			<br>
			
			<input type="hidden" name="MAX_FILE_SIZE" value="100000">
			<input type="file" name="fichero3">
			<br>
			
			<input type="submit" value="Enviar">
		
		</form>
	
	</body>

</html>