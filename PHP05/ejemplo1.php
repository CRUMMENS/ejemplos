
<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejemplo1(PHP05)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>CALCULADORA DE NOTAS</h1>
     
         <?php
         
        //si está llegando el formulario ...
        if (!empty($_POST['calcular'])) {
            
            $teoria   = floatval($_POST['teoria']);
            $practica = floatval($_POST['practica']);
            
            $resultado = ($teoria * 0.3) + ($practica * 0.7);
        }
        
        ?>
        
        
        <form method="POST">
        
        	<label>Teoria:</label>
        	<input type="number" name="teoria" value="<?= $teoria ?? '' ?>">
        	<br>
        	
        	<label>Práctica:</label>
        	<input type="number" name="practica" value="<?= $practica ?? '' ?>">
        	<br>
        	
        	<input type="submit" name="calcular" value="Calcular">

        	
         </form>
         
        	<?= empty($resultado) ? '' : "<p>Tu nota es $resultado .</p>" ?>
        
       
    

	</body>
</html>