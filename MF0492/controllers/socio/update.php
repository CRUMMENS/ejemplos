<?php

//comprueba que llega el formulario
if (empty($_POST['actualizar'])){
    throw new FormException('No se recibió el formulario');
}

//recupera el socio a partir del ID (por POST)
$libro = Socio::findOrFail(intval($_POST['id']) , 'No se encontró el socio');

//actualiza los campos de socio con los datos del formulario

$socio->dni               =$_POST['dni'];
$socio->nombre            =$_POST['nombre'];
$socio->apellidos         =$_POST['apellidos'];
$socio->nacimiento        =$_POST['nacimiento '];
$socio->telefono          =intval ($_POST['telefono']);
$socio->email             =$_POST['edicion'];
$socio->poblacion         =$_POST['edadrecomendada'];

$socio->update(); //actualiza en la BDD

//prepara el mensaje y carga la vista de éxito
$mensaje = "Actualización del socio $socio->nombre $socio->apellidos  correcto";
require '../views/exito.php';