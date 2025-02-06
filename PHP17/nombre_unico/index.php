<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP17 - nombre unico</title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	
	</head>
	
	<body>
	
		<h1>Subida de ficheros</h1>
		<p> Generar nombre unico:</p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Sube un fichero: </label>
			<br>
			
			<input type="file" name="fichero">
			<br>
			
			<input type="submit" value="Enviar">
		
		</form>

	</body>

</html>