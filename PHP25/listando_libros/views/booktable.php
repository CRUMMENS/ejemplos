
<!DOCTYPE html>
<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	<title> Lista de libros </title>
    	
    	<link re l = "stylesheet" type = "text/css"
    		  href = "https://robertsallent.com/css/generic.css">
		  
	</head>
	
	<body>
	
		<h1> Tabla de libros </h1>	
		
		<table>
		
			<tr> 
				<th>ISBN</th>
				<th>Título</th>
				<th>Autor</th>
				<th>Enlace</th>
			</tr>
			
			<?php 
			
			foreach ($libros as $libro){
			    
			    echo "<tr>";
			    echo "<td>$libro->isbn</td>";
			    echo "<td>$libro->titulo</td>";
			    echo "<td>$libro->autor</td>";
			    echo "<td><a href = 'ver.php?id=$libro->id'> Ver </a> </td>";
			    echo "</tr>";
			    
			} ?>
			
		
		
		</table>
		
		
	</body>

</html>
