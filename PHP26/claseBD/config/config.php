<?php

//PARÁMETROS DE CONFIGURACIÓN DEL AUTOLOAD
define('AUTOLOAD_DIRECTORIES' , [
    '../libraries' , 
    '../exceptions',
    '../models'
]);

//PARÁMETROS DE CONFIGURACIÓN DE LA BDD
define('DB_HOST' , 'localhost');   //host
define('DB_USER' , 'root');        //usuario 
define('DB_PASS' , '');            //password
define('DB_NAME' , 'biblioteca');  //base de datos
define('DB_PORT' , 3306);          //puerto
define('DB_CHARSET' , 'utf8');     //codificacion

//OTROS PARÁMETROS
define('DEBUG' , true) ;           //Para depurar
