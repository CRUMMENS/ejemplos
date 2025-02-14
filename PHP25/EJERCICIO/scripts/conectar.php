<?php

try {
    
    //conecta y establece el charset en función de ...
    //los parámetros indicados en el fichero de codificación
    $conexion = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);
    
    //establece el charset
    $conexion->set_charset(DB_CHARSET);
    
}catch (Exception $e){
    
    //si se produce error al conectar ...
    die ('Error al conectar con la BDD.');
}
