<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP17 - Multiples comprovaciones</title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	
	</head>
	
	<body>
	
		<h1>Subida de ficheros</h1>
		<p> Como realizar múltiples comprovaciones sobre el fichero :</p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Imagen de perfil: </label>
			<br>
			
			<input type="file" accept="image/*" name="fichero">
			<br>
			
			<input type="submit" value="Enviar">
		
		</form>

	</body>

</html>