<!DOCTYPE html>

<html lang="es">
    
    <head>
    
    <meta charset="utf-8">
    
    <title>test (PHP12)</title>
    
    <link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    
    </head>
    
    <body>
    
    <h1>EJERCICIO PHP12</h1>
    <br>
    

    
    <h2> Ejemplo 1: Creando un punto (pag16) </h2>

    <?php

    // incluiremos el fichero que contine la clase Punto
    require_once 'Punto.php';
    
    $punto1 = new Punto();    //crea un nuevo punto
    echo $punto1.'<br>';      //imprime el punto (0,0)

    $punto1->x = 100;         //acceso para escritura
    $punto1->y += 50;         //acceso para lectura y escritura
    
    echo "La coordenana X es: $punto1->x <br>";  //lectura (100)
    echo "La coordenana Y es: $punto1->y <br>";  //lectura (50)
    echo "El punto 1 se encuentra en $punto1.";  //(100,50)
    echo "<br><hr>";
    
    ?>
    
    
    <h2>Ejemplo 2 : Probando el constructor (pag25)</h2>
    
   	<?php
   	
    require_once 'Punto.php';
    
    $punto1 = new Punto();       //crea un nuevo punto
    echo $punto1.'<br>';         //imprime el punto (0,0)
    
    $punto2 = new Punto(10);  
    echo $punto2.'<br>';         //imprime el punto (10,0)
    
    $punto3 = new Punto(10,20);
    echo $punto3.'<br>';         //imprime el punto (10,20)
    
    echo "<br><hr>";
    
    ?>
    
 
    
    <h2>Ejemplo 3 : Referencias (pag30)</h2>
    
   	<?php
   	
    require_once 'Punto.php';
    
    $punto1 = new Punto(100,200);    //crea un nuevo punto
    echo $punto1.'<br>';             //imprime el punto (0,0)
    
    $punto2 = $punto1;               //NO crea un nuevo punto
    $punto2->x +=50;
    $punto2->y +=50;
    
    echo $punto2.'<br>';             //(150,250)
    
    unset($punto2);                  //elimina la referencia $punto2
    
    echo $punto1.'<b>';

    echo "<br><hr>";
    
    ?>
    
    
    
    
    <h2>Ejemplo 4 : Comparación de objetos (pag33)</h2>
    
   	<?php
   	
    require_once 'Punto.php';

    
    $punto1 = new Punto(100,200);
    $punto2 = new Punto(100,200);
    $punto3 = new Punto(10,20);
    $punto4 = $punto3;
    
    echo "<h3> punto 1 $punto1 y punto 2 $punto2 son : </h3>";
    echo $punto1 == $punto2 ? 'Iguales, ' : 'Diferentes, ';       //Iguales
    echo $punto1 === $punto2 ? 'El mismo' : 'Otro';               //Otro
    
    echo "<h3> punto 1 $punto1 y punto 3 $punto3 son : </h3>";
    echo $punto1 == $punto3 ? 'Iguales' : 'Diferentes ';          //Diferentes

    echo "<h3> punto 3 $punto3 y punto 4 $punto4 son : </h3>";
    echo $punto3 == $punto4 ? 'Iguales, ' : 'Diferentes, ';       //Iguales
    echo $punto3 === $punto4 ? 'El mismo' : 'Otro';               //El mismo
 
    echo "<br><hr>";
    
    ?>
	
	
	
	<h2>Ejemplo 5 : Clonación de objetos (pag36)</h2>
    
   	<?php
   	
    require_once 'Punto.php';

    
    $punto1 = new Punto(100,200);   //crea un objeto
    $punto2 = $punto1;              //punto2 no es un nuevo objeto , es punto1
    $punto3 =clone $punto1;         //punto3 es una copia de punto1
    
    echo "<h3> punto 1 $punto1 y punto 2 $punto2 son : </h3>";
    echo $punto1 == $punto2 ? 'Iguales, ' : 'Diferentes, ';       //Iguales
    echo $punto1 === $punto2 ? 'El mismo' : 'Otro';               //El mismo
    
    echo "<h3> punto 1 $punto1 y punto 3 $punto3 son : </h3>";
    echo $punto1 == $punto3 ? 'Iguales, ' : 'Diferentes, ';       //Iguales
    echo $punto1 === $punto3 ? 'El mismo' : 'Otro';               //Otro
 
    echo "<br><hr>";
    
    ?>
	
	
	
	<h2>Ejemplo 6 : Probar métodos creados (pag42)</h2>
    
   	<?php
   	
    require_once 'Punto.php';

    
    $punto1 = new Punto(100,200); 
    echo $punto1.'<br>';            //(100,200)
    
    $punto1->mover(10,12);
    echo $punto1.'<br>';            //(110,212)
    
    $punto1->aOrigen();
    echo $punto1.'<br>';            //(0,0)
 
    echo "<br><hr>";
    
    ?>	
    
    
    
    <h2>Ejemplo 7 : Varias operaciones en una sentencia (pag47)</h2>
    
   	<?php
   	
    require_once 'Punto.php';
    
    echo "<h3>Sin usar chaining:</h3>";

    
    $punto1 = new Punto(100,200);  //(100,200)
    $punto1->aOrigen();            //(0,0)
    $punto1->mover(1,2);           //(1,2)
    $punto1->mover(10,20);         //(11,22)
    
    echo $punto1;                  //(11,22)
    
    
    echo "<h3>Usando chaining:</h3>";

    $punto2 = new Punto(100,200);                       //(100,200)
    echo $punto2->aOrigen()->mover(1,2)->mover(10,20);  //(11,22)
    
    
    
    echo "<br><hr>";
    
    ?>	
	
	</body>
</html>