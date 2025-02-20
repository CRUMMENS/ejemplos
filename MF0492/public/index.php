<?php

require_once '../config/config.php';
require_once '../autoload.php';

try {
    
    //si llega el controlador por URL lo cargará
    //en caso contrario , cargará por defecto el indicado en config.php
    @require '../controllers/'.($_GET['controlador'] ?? DEFAULT_CONTROLLER).'.php';
    
//si se produce cualquier tipo de error ...    
} catch (Throwable $e){
   
    $mensaje = $e->getMessage();      //prepara el mensaje
    require '../views/error.php';     //muestra el error
}