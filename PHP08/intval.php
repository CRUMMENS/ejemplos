<!DOCTYPE html>

<html lang="es">
    
    <head>
    
    <meta charset="utf-8">
    
    <title>ejemplo1(PHP08)</title>
    
    <link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    
    </head>
    
    <body>
    
    <h1>EJEMPLOS PHP08</h1>
    <br>
    
    <h2>Función intval()</h2>
   
    
    <?php

    $texto = '25 elefantes se balanceaban';
    echo intval($texto).'<br>';      //25
    
    $numero = 3.1416;
    echo intval($numero).'<br>';     //3
    
    $texto = "FF";
    echo intval($texto, 16).'<br>';  //255
    
    $texto = "101010";
    echo intval($texto, 2).'<br>';   //42
                        
    
    
    ?>

	</body>
</html>