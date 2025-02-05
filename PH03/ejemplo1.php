
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<title>imprimiendo</title>
<link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
    <h1>IMPRIMIENDO</h1>
    
    <?php
    /* 
     * comentarios para documentar
     */
        $nombre = "Carmen";
        
        //si usamos comillas simples , hay que concatenar variables con . 
        echo '<p>Bienvenida '.$nombre.'</p>';
        
        // usando comillas dobles no es necesario concatenar
        echo "<p>Saludos $nombre</p>";
        print "<p>Saludos $nombre</p>";
        
        //la funcion printf() tiene la misma sintaxis que en C
        printf('<p>Eyyyyyy %s</p>', $nombre);
   
    ?>
    
    <h2>Forma abreviada</h2>
    <p>Vete ya <?= $nombre ?></p>
    
    <h2>Impresión condicional</h2>
    <p> <?= empty($nombre) ? "Identidicate" : "Adios $nombre" ?></p> 
    
    
    <h1>GENERANDO HTML</h1>
    
   	<ul>
   	
   		<?php
   		//general n elementos <li>
   		for($i=1; $i<=5; $i++)
   		    echo "<li>$i Mississipi. </li>";
   		?>
   	</ul>   
   	
   	
   	
   	<h1>GENERANDO ELEMENTOS POR TABLA </h1>
   	<table border='1'>

   		<tr>
   			<th>Radio</th>
   			<th>Diametro</th>
   			<th>Perimetro</th>
   			<th>Area</th>
   		</tr>
   		
   		<?php for($radio = 1; $radio <= 10; $radio++){ ?>
   			<tr>
   				<th><?= $radio ?> </th>
   				<th><?= $radio*2 ?></th>
   				<th><?= 2*pi()*$radio ?> </th>
   				<th><?= pi()*$radio*$radio ?> </th>
   			</tr>
   		
   		<?php } ?>
   	
   	</table>
    
	</body>
</html>