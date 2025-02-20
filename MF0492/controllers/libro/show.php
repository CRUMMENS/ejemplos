<?php

use Couchbase\Exception\BucketNotFoundException;

//comprueba si llega el ID del libro por la URL
if (empty($_GET['id'])) {
    throw new NothingToFindException("Falta el id del libro");
}

$id = intval ($_GET['id']); //toma el id

//recupera el libro y comprueba que existe
if(empty($libro = Libro::find($id)))
    throw new BucketNotFoundException("No existe el libro $id");

//carga la vista de detalles del libro
require '../view/libro/detalles.php';

