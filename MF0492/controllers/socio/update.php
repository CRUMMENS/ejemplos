<?php

//comprueba que llega el formulario
if (empty($_POST['actualizar'])){
    throw new FormException('No se recibió el formulario');
}

//recupera el socio a partir del ID (por POST)
$socio = Socio::findOrFail(intval($_POST['id']) , 'No se encontró el socio');

//actualiza los campos de socio con los datos del formulario

$socio->nombre            =$_POST['nombre'];
$socio->apellidos         =$_POST['apellidos'];
$socio->telefono          =intval ($_POST['telefono']);
$socio->email             =$_POST['email'];
$socio->poblacion         =$_POST['poblacion'];

$socio->update(); //actualiza en la BDD

//prepara el mensaje y carga la vista de éxito
$mensaje = "Actualización del socio $socio->nombre $socio->apellidos  correcto";
require '../views/exitoSocio.php';