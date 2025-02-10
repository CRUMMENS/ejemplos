<!DOCTYPE htm>

<html lang = "es">

	<head>
	
    	<meta charset = "UTF-8">
    	
    	<title> PHP24 - imagen email  </title>
    	
    	<link rel = "stylesheet" type="text/css"  
    	href="http://robertsallent.com/css/generic.css">
    	
	</head>
	
	
	<body>


    <?php
    
    $to       = "dcfbyhvqsjgxwjteqr@hthlm.com";   //receptor (mail de prueba)
    $subject  = "Test mail";                      //asunto
    $headers  = "MIME-version: 1.0\r\n";          //cabeceras
    $headers .= "Content-type:text/html; charset = utf-8\r\n";
    $headers .= "To:   <$to>\r\n"; 
    $headers .= "From: CARMEN <carmensandiego@hotmial.com>\r\n";
    
    
    //mensaje en HTML (uyso sintaxis HEREDOC que es más sencilla)
    $message=<<<EOD
    
    <html lang="es">
        <head>
            <tittle> Test de envio de mail </tittle>
        </head>
        
        <body>
            <h3>Test</h3>
            <p> Hola! </p>
            <img src = 'https://www.juegayestudia.com/images/samples/juegos2.png'>
            <a href  = 'https://www.juegayestudia.com'>Click</a>
    	</body>
    
    </html>

    EOD;
    
    echo mail ($to, $subject ,$message , $headers ) ? "ENVIADO" : "NO ENVIADO";

    ?>
    
    
    

	</body>

</html>

