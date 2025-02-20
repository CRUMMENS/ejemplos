<?php

//comprueba que llega el formulario de confirmación de borrado
if (empty($_POST['confirmarborrado'])){
    throw new FormException("No se recibio la confirmación.");
}

//recupera el libro a partir del ID (por POST)
$libro = Libro::findOrFail(intval($_POST['id']) , 'No se encontró el libro');


//comprueba si el libro tiene ejemplares o no , tendremos que añadir ...
// ... la clase Ejemplar del modelo en la carpeta models
if($libro->hasAny('Ejemplar')){
    throw new Exception('No se puede borrar un libro si tiene ejemplares.');
}

//borra el libro
$libro->deleteObject();

//prepara el mensaje y muestra la vista de éxito
$mensaje = "Borrado del libro $libro->titulo , de $libro->autor correcto";
require '../views/exito.php'; //mostrar exito