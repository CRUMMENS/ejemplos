<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejemplo2(PHP05)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP05</h1>
        <br>
        
        <h2>Ejercio 1: Pasar de Fahrenheit a Celsius.</h2>
         
        <?php
        
            $fahrenheit   = floatval($_POST['fahrenheit']);
            
            $grados = ($fahrenheit - 32) * (5/9);
            
        ?>
        
        
        
        <form method="POST">
        
        	<label>Fahrenheit:</label>
        	<input type="number" name="fahrenheit" value="<?= $fahrenheit ?? '' ?>">
        	<br> 	
        	
        	<input type="submit" name="celsius" value="Celsius">
        	
         </form>
        	
        	<?= isset($grados) ? "<p>En Celsius es  $grados .</p>" : '' ?>
        	

	</body>
</html>