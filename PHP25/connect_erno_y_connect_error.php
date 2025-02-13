<?php

// NOTA : Para versiones PHP anteriores a la 8.1
//crea una conecion con la BDD biblioteca
$conexion = @new mysqli('localhost', 'root' , '' , 'biblioteca');

//si no se pudo conectar ...
if ($conexion->connect_errno)
    throw new Exception("ERROR al conectar: ".$conexion->connect_error);

//establece el conjunto de carácteres a UTF-8
$conexion->set_charset('utf8');

echo "<p>La conexion se ha establecido correctamente</p>";

?>