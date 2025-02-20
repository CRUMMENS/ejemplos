<?php

//comprueba que llega el formulario de confirmación de borrado
if (empty($_POST['confirmarborrado'])){
    throw new FormException("No se recibio la confirmación.");
}

//recupera el socio a partir del ID (por POST)
$socio = Socio::findOrFail(intval($_POST['id']) , 'No se encontró el socio');


//comprueba si el socio tiene ejemplares o no , tendremos que añadir ...
// ... la clase Ejemplar del modelo en la carpeta models
if($socio->hasAny('Ejemplar')){
    throw new Exception('No se puede borrar un socio si tiene ejemplares.');
}

//borra el socio
$socio->deleteObject();

//prepara el mensaje y muestra la vista de éxito
$mensaje = "Borrado del socio $socio->nombre , con ID $socio->id ";
require '../views/exito.php'; //mostrar exito