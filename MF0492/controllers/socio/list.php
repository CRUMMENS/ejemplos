<?php

//recupera la lista de socios mediante el modelo
$libros = Libro::all();

//carga la vista que muestra el listado
require '../views/socio/lista.php';