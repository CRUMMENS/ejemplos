<?php

//Establece la conexion
$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');
$conexion->set_charset('utf8');

//prepara una consulta de actualizacion
$consulta = " UPDATE libros 
                SET titulo = 'La historia interminable' 
                WHERE titulo = 'Neverending story' ";

//lanza la consulta contra la BDD
$conexion->query($consulta);

//muestra el resultado
echo "<p>Actualización de $conexion->affected_rows filas OK</p>";

?>