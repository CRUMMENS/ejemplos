<?php

//Establece la conexion
$conexion = new mysqli ('localhost', 'root' , '' , 'biblioteca');
$conexion->set_charset('utf8');

//prepara una consulta de actualizacion
$consulta  = " SELECT * FROM libros WHERE id = 1" ;
$resultado = $conexion->query($consulta);

//si hay resultados ... 
if ($resultado->num_rows){
    
    //recuperamos el resultado a modo de array asociativo
    $libro = $resultado->fetch_assoc();
    $resultado->free();                  //libera memoria
    
    //muestra la estructura de $libro
    echo "<pre>" ; 
    var_dump($libro);
    echo "</pre>" ; 
    
} else {
    
    echo "No se encontró el libro deseado";
}

?>