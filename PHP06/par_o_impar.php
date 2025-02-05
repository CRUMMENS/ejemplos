<!DOCTYPE html>
    <html lang="es">
    
    <head>

        <meta charset="utf-8">
        <title>ejercicio7(PHP06)</title>
        <link rel="stylesheet" type="text/css"
        href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
        <h1>EJERCICIOS PHP06</h1>
        <br>
        
        <h2>Ejercio 7 : ¿Par o impar?</h2>
         
       
        <form method="POST">
        
        	<label>Indique un número:</label>
        	<input type="number" name="numero" value="<?= $numero ?? '' ?>">
        	<br>
        
        	<input type="submit" name="calcular" value="Calcular">

        	
         </form>     
         
         
         <?php
          
         if (isset ( $_POST['calcular'])){
             
           $numero = intval($_POST['numero']);  
           
           echo $numero % 2 ? "$numero ES INPAR" : "$numero ES PAR";
           
         }
            
            
            
            
        ?>
        
        

        
	</body>
</html>