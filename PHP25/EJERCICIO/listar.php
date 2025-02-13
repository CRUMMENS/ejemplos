
<?php

// Fichero que carga todos los recursos necesarios , conecta , recupera .. 
// .. los libros usando scripts y carga la vista que muestra el listado

//carga la configuración y el autoload
include 'config/config.php';
include 'libraries/autoload.php';

//ejecuta los scripts de conectar y recuperar libros 
include 'scripts/conectar.php';
include 'scripts/recuperarLibros.php';

//carga la vista de listado 
include 'views/booklist.php';

//carga la vista de la tabla
include  'views/booktable.php';

?>