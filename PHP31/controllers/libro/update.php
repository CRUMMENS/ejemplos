<?php

//comprueba que llega el formulario
if (empty($_POST['actualizar'])){
    throw new FormException('No se recibió el formulario');
}

//recupera el libro a partir del ID (por POST)
$libro = Libro::findOrFail(intval($_POST['id']) , 'No se encontró el libro');

//actualiza los campos de libro con los datos del formulario

$libro->isbn               =$_POST['isbn'];
$libro->titulo             =$_POST['titulo'];
$libro->editorial          =$_POST['editorial'];
$libro->autor              =$_POST['autor'];
$libro->idioma             =$_POST['idioma'];
$libro->edicion            = intval ($_POST['edicion']);
$libro->edadrecomendada    = intval ($_POST['edadrecomendada']);

$libro->update(); //actualiza en la BDD

//prepara el mensaje y carga la vista de éxito
$mensaje = "Actualización del libro $libro->titulo correcto";
require '../views/exito.php';