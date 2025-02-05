<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio6(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 6 : Tabla de multiplicar del 1 al 9</h2>
         
 
      <?php 
        $i; //multiplicando
        $j; //multiplicador
        
        for ($j=0; $j <=9 ; $j++) { 
            
        	for ($i=01; $i <=10 ; $i++) {
        	    
        	   
        	    echo '<br>'."$i X $j =";
        		echo ($i *$j);	
        	}
        	echo '<br>';
        }

       ?>

	
	</body>
</html>