<?php

//comprueba que llega el formulario
if (empty($_POST['guardar'])){
    throw new FormException('No se recibió el formulario');
}

//crea un nuevo socio y toma sus valores del POST
$socio = new Socio();

$socio->nombre            =$_POST['nombre'];
$socio->apellidos         =$_POST['apellidos'];
$socio->telefono          =intval ($_POST['telefono']);
$socio->email             =$_POST['email'];
$socio->poblacion         =$_POST['poblacion'];

$socio->save(); //guarda el socio

//prepara el mensaje 
$mensaje = "Guardado del socio $socio->nombre $socio->apellidos correcto";
require '../views/exitoSocio.php';