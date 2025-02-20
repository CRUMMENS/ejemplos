<?php

//recupera el socio a partir del ID
//si no llega ID o si no encuentra el socio lanza excepciones
$socio = Socio::findOrFail(intval($_GET['id']) , 'No se encontró el socio');

//carga el formulario de edición
require '../views/socio/actualizar.php';
