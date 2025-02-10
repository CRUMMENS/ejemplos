<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP24 - envio email </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	</head>
	
	
	<body>

    <?php
    
    $to      ="dcfbyhvqsjgxwjteqr@hthlm.com";   //receptor (mail de prueba)
    $subject = "Hola mundo";                    //asunto
    $message = "Hola! Esto es una prueba";      //mensaje 
   
    //cabeceras adicionales
    $headers = "To:   <$to>\r\n";
    $headers = "From: CARMEN <carmensandiego@hotmial.com>\r\n";
    
    //llamamos a la función mail con los parámetros adecuados
    echo mail($to,$subject,$message,$headers)? "ENVIADO" : "NO ENVIADO";
    
    ?>

	</body>

</html>