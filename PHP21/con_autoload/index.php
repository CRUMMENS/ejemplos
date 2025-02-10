<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP21 - cargar una clase CON Autoload  </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	</head>
	
	
	<body>

    <?php
    
    include 'config/config.php';
    include 'libraries/autoload.php';
    
    
    //a partir de este punto , no harán falta más includes o requires
    
    
    //crea una Moto
    $moto = new Moto('Honda','X2');
    echo "<p> Se ha creado $moto.</p>";
    
    $moto->arrancar();
    
    //crea un Coche
    $coche = new Coche('Toyota','Prius');
    echo "<p> Se ha creado $coche.</p>";
    
    $coche->arrancar();
    
    ?>

	</body>

</html>