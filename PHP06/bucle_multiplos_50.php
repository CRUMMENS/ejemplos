<!DOCTYPE html>
 <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio4(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 4: Bucle para imprimir los numeros múltiplos de 50 (del 1000 al 0)</h2>
         
         <?php
        
         for ($i = 1000; $i >= 0; $i--) {
             
             if($i % 50 == 0) 
                 echo $i ."<br>";    
          
         }
         
         ?>

	</body>
</html>