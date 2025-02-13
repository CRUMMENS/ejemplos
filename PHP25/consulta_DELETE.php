<?php

//Establece la conexion
$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');
$conexion->set_charset('utf8');

//prepara una consulta de actualizacion
$consulta = " DELETE FROM libros
              WHERE titulo = 'La historia interminable' ";

//lanza la consulta contra la BDD
$conexion->query($consulta);

//muestra el resultado
echo "<p> Borrado de $conexion->affected_rows filas OK</p>";

?>