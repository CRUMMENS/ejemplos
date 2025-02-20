<?php

//comprueba que llega el formulario
if (empty($_POST['guardar'])){
    throw new FormException('No se recibió el formulario');
}

//crea un nuevo socio y toma sus valores del POST
$libro = new Libro();

$socio->dni               =$_POST['dni'];
$socio->nombre            =$_POST['nombre'];
$socio->apellidos         =$_POST['apellidos'];
$socio->nacimiento        =$_POST['nacimiento '];
$socio->telefono          =intval ($_POST['telefono']);
$socio->email             =$_POST['edicion'];
$socio->poblacion         =$_POST['edadrecomendada'];

$libro->save(); //guarda el socio

//prepara el mensaje 
$mensaje = "Guardado del socio $socio->nombre $socio->apellidos correcto";
require '../views/exito.php';