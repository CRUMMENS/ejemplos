<?php

use Couchbase\Exception\BucketNotFoundException;

//comprueba si llega el ID del socio por la URL
if (empty($_GET['id'])) {
    throw new NothingToFindException("Falta el id del socio");
}

$id = intval ($_GET['id']); //toma el id

//recupera el socio y comprueba que existe
if(empty($socio = Socio::find($id)))
    throw new BucketNotFoundException("No existe el socio $id");

//carga la vista de detalles del socio
require '../view/socio/detalles.php';

