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
    
    <h2>Función cubo()</h2>
   
    
    <?php

    function cubo($numero){
        return $numero * $numero * $numero;
    }
    
    echo cubo(3); //27
    echo'<br>';
    
    echo cubo(5); //125
    echo'<br>';
    
    echo cubo(0); //0
    echo'<br>';
    
    echo cubo(-2); //-8
    echo'<br>';
    
    echo cubo(2,4,5,6); //Solo coge el primer valor : 2 al cubo = 8
    echo'<br>';
    
    echo cubo('PATATA'); //ERROR DE TIPOS
    echo'<br>';
    
    echo cubo(); //ERROR FATAL (faltan parámetros)
    echo'<br>';
    
    ?>

	</body>
</html>