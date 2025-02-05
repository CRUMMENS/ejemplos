<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> File upload - Ejemplo con previsualización </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
    	<script src = 'js/Preview.js'></script>
	
	</head>
	
	<body>
	
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
		
			<label> Sube tu imagen de perfil: </label>
			<br>
			
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "1240000">
			
			<input type = "file" accept=".jpg, .png, .gif" 
			name="fichero" id="file-with-preview">
			<br>
			
			<input type = "submit" value = "Enviar">
		
		</form>
		
		
		<figure>
		
			<img src = "imagenes/default.jpg" id = "preview-image" width = "200">
		
		</figure>
	
	</body>

</html>