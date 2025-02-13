
<!DOCTYPE html>
<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	<title> Lista de libros </title>
    	
    	<link re l = "stylesheet" type = "text/css"
    		  href = "https://robertsallent.com/css/generic.css">
		  
	</head>
	
	<body>
	
		<h1> Lista de libros </h1>	
		<ul>
		
		<?php 
		
		  foreach ($libros as $libro)
		      echo "<li>$libro</li>";
		
		?>
		
		</ul>	
	</body>

</html>

