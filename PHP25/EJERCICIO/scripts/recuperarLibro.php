<?php

if (empy($GET_['id'])) { 
	throw new Exception('No llegó el ID');
}

//pillar el ID que llega el GET
$id = intval($_GET['id']) ?? 0 ;

//realizar la consulta
$resultado = $conexion->query("SELECT * FROM libros WHERE ID = $id");

//si no hay resultado lanza una excepcion 
if (!$resultado->num_rows) {
    throw new Exception ('No hay resultados');
}

$libro = $resultado -> flech_object('Libro');
