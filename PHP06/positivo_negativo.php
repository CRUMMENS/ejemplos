<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio8(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 8 : ¿Positivo o negativo?</h2>
              
        <form method="POST">
        
        	<label>Indique un número:</label>
        	<input type="number" name="numero" value="<?= $numero ?? '' ?>">
        	<br>
        
        	<input type="submit" name="calcular" value="Calcular">

        	
         </form>
              
         <?php
          
            $numero   = floatval($_POST['numero']);
            
            if($numero >=0){
                echo "<p>$numero Es positivo</p>";
            }else {
                echo "<p>$numero Es negativo</p>";        
            }
        ?>
        
	</body>
</html>