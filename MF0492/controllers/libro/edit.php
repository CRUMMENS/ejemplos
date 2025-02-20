<?php

//recupera el libro a partir del ID
//si no llega ID o si no encuentra el libro lanza excepciones
$libro = Libro::findOrFail(intval($_GET['id']) , 'No se encontró el libro');

//carga el formulario de edición
require '../views/libro/actualizar.php';
