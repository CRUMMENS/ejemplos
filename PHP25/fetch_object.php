<?php

$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');
$conexion->set_charset('utf8');

//preparamos y lanzamos una consulta de selección
$consulta  = " SELECT id , titulo , autor FROM libros ORDER BY id ASC" ;
$resultado = $conexion->query($consulta);

echo "<p>Se han encontrado $resultado->num_rows libros.</p>";

//convierte cada fila del resultado en objeto
while ($libro = $resultado->fetch_object()){
    
    //muestra la información contenida en el objeto
    echo "$libro->id - $libro->titulo, de $libro->autor.<br>";
}

$resultado->free();   //libera memoria


?>