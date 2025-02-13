<?php

//Establece la conexion 
$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');
$conexion->set_charset('utf8');

//prepara una consulta de inserción en un string (recomendado)
$consulta = "INSERT INTO libros (
                isbn , titulo , editorial , idioma , 
                autor , edicion , edadrecomendada 
            ) VALUES ( 
                '123456' , 'Neverending story' , 'Alfaguara' , 'English' , 
                'Michael Ende' , 5 , 3 )";

//ejecuta la consulta que acabamos de preparar 
$conexion->query($consulta);

//muestra el resultado
echo "<p>Todo OK , el ID del resgistro es $conexion->insert_id</p>";

?>