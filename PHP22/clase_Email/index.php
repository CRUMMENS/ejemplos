<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP24 - clase email  </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	</head>
	
	
	<body>

    <?php
    
    include 'config/config.php';
    include 'libraries/autoload.php';
    
    $from     = "carmensandiego@hotmail.com";    //emisor
    $name     = "Carmen";                        //nombre del emisor
    $to       = "dcfbyhvqsjgxwjteqr@hthlm.com";  //receptor
    $subject  = "Test de envio :D";              //asunto
    $message  = "Hola !! ¿que tal ? :) ";        //mensaje
    
    //crea el nuevo email
    $email = new Email ($to , $from , $name , $subject , $message);
    
    //lo envia, si todo va bien veremos "ENVIADO" ; 
    echo $email->send() ? "ENVIADO" : "NO ENVIADO";
    
    ?>
    

	</body>

</html>