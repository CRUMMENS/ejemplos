<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP17 - Subida de ficheros </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	
	</head>
	
	<body>
	
		<h1>Subida de ficheros</h1>
		<p> Comprobación de tamaño del fichero subido:</p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Fichero: </label>
			<br>
			
			<input type="file" name="fichero">
			<br>
			
			<input type="submit" value="Enviar">
		
		</form>
		
		
	
	</body>

</html>