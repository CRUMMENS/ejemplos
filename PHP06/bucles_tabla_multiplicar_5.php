<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio5(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 5: Tabla de multiplicar del 5</h2>
         
 
      <?php 
        $num = 5;
        
        echo"Tabla del $num <br><br>";  
        for($i = 0; $i <= 10; $i++) {
            $resultado = $i * $num;        
            echo "\n$num x $i = $resultado";  
            echo '<br>';
        }
        ?>

	
	</body>
</html>