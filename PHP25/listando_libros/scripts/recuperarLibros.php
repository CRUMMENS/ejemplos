<?php

//lanza la consulta
$resultado = $conexion->query("SELECT * FROM libros");

//prepara una lista de libors
$libros = [];

//convierte cada fila del resultado en un objeto Libro ..
while ($libro = $resultado->fetch_object('Libro')) {
    $libros[] = $libro;     // .. y lo mete en la lista 
}

$resultado->free();    //libera memoria 

//en este punto , hemos convertido el resultado de la consulta ..
// .. en una lista de libros . 

?>