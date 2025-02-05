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
    
    <h2>Funcionamiento de array_pop()</h2>
   
    
    <?php

    $lista = ['Pepe' , 'Eva' , 'Marta' , 'Carlos'];
    
    echo "<pre>";
    print_r($lista);
    echo "</pre>";
    
    //extrae el ultimo elemento del array (Carlos)
    echo"<br>";
    echo "extraemos el ultimo elemento de la lista :" ;
    $ultimo = array_pop($lista);
    
    
    //llamamos al ultimo de la lista
    echo "<p>$ultimo</p>"; //Carlos
    
    //nueva lista, sin el ultimo elemento de la lista
    echo "<pre>";
    print_r($lista);
    echo "</pre>";
    
    ?>

	</body>
</html>