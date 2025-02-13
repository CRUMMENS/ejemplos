<?php

//crea una conexion con la BDD 'biblioteca'
$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');

//establece la codificación de caracteres a UTF-8
$conexion->set_charset('utf8');

echo "<p>La conexion se ha establecido correctamente</p>";

?>