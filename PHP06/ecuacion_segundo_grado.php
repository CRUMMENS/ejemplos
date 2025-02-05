<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio10(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 10 : ecuación de segundo grado </h2>
        
        

              
         <?php
         
          echo '<img src="ecuacion.jpg" alt="ecuacion" width="300px" height="100px">';
              
            $a = floatval($_POST['a']);
            $b = floatval($_POST['b']);
            $c = floatval($_POST['c']);
            
            $ecuacion = $b * $b - 4 * $a * $c;
            
            if ($a == 0) {
                echo "<p> No tiene solución </p>";
                
            } else {
                $raiz = sqrt($ecuacion);
                $x1 = (-$b + $raiz) / (2 * $a);
                
                if ($ecuacion !=0) {
                    $x2 = (-$b - $raiz) / (2 * $a);
                    echo 'Las soluciones son $x1 y  $x2';
                }else{
                    echo 'La solucion es $x1';
                }
            }
            
        ?>
        
        
        <form method="POST">
        
        	<label>Indique el valor de la a:</label>
        	<input type="number" name="numero" value="<?= $ecuacion ?? '' ?>">
        	<br>
        	
        	<label>Indique el valor de la b:</label>
        	<input type="number" name="numero" value="<?= $ecuacion ?? '' ?>">
        	<br>
        	
        	<label>Indique el valor de la c:</label>
        	<input type="number" name="numero" value="<?= $ecuacion ?? '' ?>">
        	<br> 
        	       
        	<input type="submit" name="calcular" value="Calcular">

        	
         </form>    
             
	</body>
</html>