<?php

//recupera la lista de socios mediante el modelo
$socios = Socio::all();

//carga la vista que muestra el listado
require '../views/socio/lista.php';