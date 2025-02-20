
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<title>HolaMundo</title>
		<link rel="stylesheet" type="text/css"
			  href="http://robertsallent.com/css/generic.css">
	</head>

	<body>
	
		<h1> Sentencias SQL</h1>
        <?php
            //recupera los datos que llegan por GET
            $campo    = $_GET['campo'] ?? 'dni' ;
            $valor    = $_GET['valor'] ?? '' ;
            $orden    = $_GET['orden'] ?? 'id' ;
            $sentido  = $_GET['sentido'] ?? 'ASC' ;
            
            //consulta SQL
            $consulta = "SELECT * FROM usuarios
                        WHERE $campo LIKE '%$valor%'
                        ORDER BY $orden $sentido";
            
         ?>
         
	</body>
</html>