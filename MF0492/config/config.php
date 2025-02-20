<?php

//PARÁMETROS DE CONFIGURACIÓN DEL AUTOLOAD
define('AUTOLOAD_DIRECTORIES' , [
    '../libraries' , 
    '../exceptions',
    '../models'
]);

//CONTROLADOR POR DEFECTO
define('DEFAULT_CONTROLLER','welcome');

//PARÁMETROS DE CONFIGURACIÓN DE LA BDD
define('DB_HOST' , 'localhost');   //host
define('DB_USER' , 'root');        //usuario 
define('DB_PASS' , '');            //password
define('DB_NAME' , 'biblioteca');  //base de datos
define('DB_PORT' , 3306);          //puerto
define('DB_CHARSET' , 'utf8');     //codificacion

//Clase DB que usará nuestro ORM   
define('DB_CLASS' , 'DBMysqli') ;  //Puede ser DBMysqli o DBPDO
define('SGDB' , 'mysql');          //driver de PDO (solo para DBPDO)

//OTROS PARAMETROS
define ('DEBUG' , true);           //para depuración
