<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP21 - cargar una clase SIN Autoload </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	</head>
	
	
	<body>

    <?php
    
    //carga los ficheros con las clases
    require_once 'models/Vehiculo.php';
    require_once 'models/Moto.php';
    require_once 'models/Coche.php';
    
    
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