<?php

//recupera la lista de libros mediante el modelo
$libros = Libro::all();

//carga la vista que muestra el listado
require '../views/libro/lista.php';