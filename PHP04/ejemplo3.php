
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<title>ejemplo3(PHP04)</title>
		<link rel="stylesheet" type="text/css"
			  href="http://robertsallent.com/css/generic.css">
	</head>

	<body>

        <h1>DECLARACION DE VARIABLES</h1>
        <h3> lectura de variable inexistente : </h3>
        
        <?php
        
        //la variable $a vale 100
        $a = 100;
        
        //suma $a con $b , pero $b no existe 
        $resultado = $a + $b ; 
        
        //mostrará 100 . PHP asumirá el valor por defecto de 0 para $b
        echo "<p> a = 100 </p>";
        echo "<p> b = ??? </p>";
        echo "<p> a + b = $resultado </p>";
 
        ?>	

	</body>
</html>