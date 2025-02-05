
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
        <h2>Ejercio 2: Escribe un programa que convierta de kilómetros a millas.</h2>
        	
         <?php
       
            $kilometros   = floatval($_POST['kilometros']);
            
            $millas = $kilometros/1.609;

        ?>
        
        <form method="POST">
        
        	<label>Kilometros:</label>
        	<input type="number" name="kilometros" value="<?= $kilometros ?? '' ?>">
        	<br> 	
        	
        	<input type="submit" name="millas" value="Millas">
        	
         </form>
        	
        	  
        	<?= empty($millas) ? '' : "<p>En millas es $millas .</p>" ?>  
      

	</body>
</html>