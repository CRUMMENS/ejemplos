<?php

// .................................................................................
// PRUEBAS SE SELECT()

include '../config/config.php';
include '../autoload.php';

//pruebas de select()
echo "<h2>Recuperando el socio 5 </h2>";
echo "<pre>";
var_dump(DBMysqli::select("SELECT * FROM socios WHERE id=5"));
echo "</pre>";

echo "<h2>Recuperando el socio 5000  (no existe) </h2>";
echo "<pre>";
var_dump(DBMysqli::select("SELECT * FROM socios WHERE id=5000"));
echo "</pre>";


// .................................................................................

//PRUEBAS DE SELECTALL()

echo "<h2>Recuperando los temas (limit 5) </h2>";
echo "<pre>";
var_dump(DBMysqli::selectAll("SELECT * FROM temas LIMIT 5"));
echo "</pre>";

echo "<h2>Recuperando los temas de Stephen King (no hay) </h2>";
echo "<pre>";
var_dump(DBMysqli::selectAll("SELECT * FROM libros WHERE autor='Stephen King'"));
echo "</pre>";



// .................................................................................
//PRUEBAS DE INSERT()

echo "<h2>Guardando un tema </h2>";

$consulta = "INSERT INTO temas(tema , descripcion) 
             VALUES ('Viajes', 'Viaje con nosotros si quiere jugar')";

$id         = DBMysqli::insert($consulta);


echo "<p> El ID del nuevo tema es : $id </p>";



// .................................................................................
//PRUEBAS DE UPDATE()

echo "<h2>Actualizando un tema </h2>";

$consulta = "UPDATE temas SET tema = 'Viajes' WHERE id = 20";
$filas = DBMysqli::update($consulta);

echo "<p> Filas afectadas: $filas </p>";

//comprobación de que se ha actualizado correctamente 
echo "<pre>";
var_dump(DBMysqli::select("SELECT * FROM temas WHERE id=20"));
echo "</pre>";


// .................................................................................
//PRUEBAS DE DELETE()

echo "<h2>Borrar un tema </h2>";

$filas = DBMysqli::delete("DELETE FROM temas where id = 20");
echo "<p> Filas afectadas : $filas </p>";

//comprobación de que se ha borrado correctamente 
echo "<pre>";
var_dump(DBMysqli::select("SELECT * FROM temas WHERE id=20"));
echo "</pre>";


// .................................................................................
//PRUEBAS DE TOTALES

echo "<h2> Totales </h2>";

echo "<p> Total de socios : ".DBMysqli::total ('socios'). "</p>";
echo "<p> Fecha de alta del ultimo socio : ".DBMysqli::total ('socios', 'MAX', 'alta'). "</p>";
echo "<p> Nacimiento del socio mayor     : ".DBMysqli::total ('socios', 'MIN', 'nacimiento'). "</p>";
echo "<p> Precio medio de ejemplares     : ".DBMysqli::total ('ejemplares', 'AVG', 'precio'). "</p>";







