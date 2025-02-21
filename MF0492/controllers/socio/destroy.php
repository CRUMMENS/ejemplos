<?php

//comprueba que llega el formulario de confirmación de borrado
if (empty($_POST['confirmarborrado'])){
    throw new FormException("No se recibio la confirmación.");
}

//recupera el socio a partir del ID (por POST)
$socio = Socio::findOrFail(intval($_POST['id']) , 'No se encontró el socio');

//borra el socio
$socio->deleteObject();

//prepara el mensaje y muestra la vista de éxito
$mensaje = "Borrado del socio $socio->nombre , con ID $socio->id ";
require '../views/exitoSocio.php'; //mostrar exito