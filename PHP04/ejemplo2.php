

<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<title>ejemplo2(PHP04)</title>
		<link rel="stylesheet" type="text/css"
			  href="http://robertsallent.com/css/generic.css">
	</head>

	<body>

        <h1> VARIABLES  SUPERGLOBALES</h1>
        <h3> $_SERVER : información del servidor y datos del cliente  </h3>
        
        <?php
        
        //navegador del cliente 
        echo "Tu navegador es : ".$_SERVER['HTTP_USER_AGENT']."<br>";
        echo "<br>";
        
        //ip de la maquina que realiza la petición
        echo "Tu ip es : ".$_SERVER['REMOTE_ADDR']."<br>";
        echo "<br>";
        
        // software del servidor
        echo "El software en el server es : ".$_SERVER['SERVER_SOFTWARE']."<br>";
        echo "<br>";
        
        //mostrar todo lo   que hay en $_SERVER
        echo "Mostrar todos los datos de SERVER:";
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";
        ?>	
	</body>
</html>