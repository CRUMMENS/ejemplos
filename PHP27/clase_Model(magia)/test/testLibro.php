<h1>Probando los métodos de Model</h1>

<?php
    require_once '../config/config.php';   //carga el fichero de configuración
    require_once '../autoload.php';        //usa el autoload
    
?>

<!---------------------------  Libro::all() ---------------------------->
<h2>Recuperando todos los libros</h2>
<p>Usamos el método estátito <code>all()</code>.</p>

<p>Este método puede recibir opcionalmente LIMIT y OFFSET por parámetro.</p>

<ul>
<?php

    $libros = Libro::all();               //recupera todos los libros
    
    foreach ($libros as $libro)
        echo "<li>$libro<li>";            //muestra los libros

?>
</ul>


<!---------------------------  Libro::orderBy() ---------------------------->
<h2>Recuperar con orden</h2>
<p>Usamos el método estátito <code>orderBy()</code>.</p>

<p>Los parámetros de este método son : campo , sentido , limit , offset . 
	Todos son opcionales (por defecto id , ASC , O , O).  </p>
	
<p>Recuperamos los dos primeros libros ordenados por título ASC :</p>

<ul>
<?php

    $libros = Libro::orderBy('titulo', 'ASC' , 2);               
    
    foreach ($libros as $libro)
        echo "<li>$libro<li>";            //muestra los libros

?>
</ul>



<!---------------------------  Libro::find() ---------------------------->
<h2>Recuperar una entidad por ID</h2>
<p>Usamos el método estátito <code>find()</code>.</p>

<p>Es obligatorio pasarle el identificador de la entidad a buscar.  </p>
	
<p>Recuperamos un libro existente e intentaremos recuperar otro que no:</p>

<ul>
<?php

    $libro = Libro::find(3);               
        echo "<p>".($libro ?? 'NO EXISTE')."</p>"; 
        
    $libro = Libro::find(100);
        echo "<p>".($libro ?? 'NO EXISTE')."</p>";

?>
</ul>



<!---------------------------  Libro::findOrFail() ---------------------------->
<h2>Recuperar una entidad por ID o lanza NotFoundException </h2>
<p>Usamos el método estátito <code>findOrFail()</code>.</p>

<p>Es obligatorio pasarle el identificador de la entidad a buscar. </p>
	
<p>Recuperaremos un libro existente e intentaremos recuperar otro que no , para 
evitar que el programa se detenga , trataremos la excepción</p>

<ul>
<?php

    try {
        $libro = Libro::findOrFail(3);
            echo "<p>$libro</p>"; 
            
        $libro = Libro::findOrFail(1000);
            echo "<p>$libro</p>"; 
        
    }catch (NotFoundException $e) {
        echo "<p>Se produjo una NotFoundException</p>";
    }
?>
</ul>


<!---------------------------  Libro::getFilered() ---------------------------->
<h2>Recuperar entidades aplicando un filtro simple</h2>
<p>Usamos el método estátito <code>getFiltered()</code>.</p>

<p>Los parámetros que recibe son : campo , valor , orden y sentido .  Son todos
opcionales , pero lo normal es indicar al menos campo y valor . </p>
	
<p>Recuperaremos los libros de la editorial Planeta , ordenados por título ASC :</p>

<ul>
<?php

    $libros = Libro::getFiltered('editorial' , 'Planeta' , 'titulo' , 'ASC');
    
    foreach ($libros as $libro)
        echo "<li>$libro</li>";   //muestra los libros
?>
</ul>


<!---------------------------  Libro::where() ---------------------------->
<h2>Recupera entidades aplicando una lista de condiciones</h2>
<p>Usamos el método estátito <code>where()</code>.</p>

<p>Recibe un array asociativo con los pares de campo/valor. </p>
	
<p>Libros de Date que tienen en el título la palabra SQL</p>

<ul>
<?php

        $libros = Libro::where([
            'autor'  => 'Date' , 
            'titulo' => 'SQL'
        ]);
        
        foreach ($libros as $libro)
            echo "<li>$libro</li>";   //muestra los libros

?>
</ul>



<!---------------------------  Libro::isNull() ---------------------------->
<h2>Recupera entidades con algún campo NULL</h2>
<p>Usamos el método estátito <code>isNull()</code>.</p>

<p>Es obligatorio pasarle el campo en el que buscar valores nulos. </p>
	
<p>Libros sin portada:</p>

<ul>
<?php

        $libros = Libro::isNull('portada');
        
        foreach ($libros as $libro)
            echo "<li>$libro</li>";   //muestra los libros

?>
</ul>




<!----------------------------- save() ------------------------------>
<h2>Guarda un libro</h2>
<p>Usamos el método de objeto <code>save()</code>.</p>

<p>Se aplica sobre el objeto de tipo Libro que queremos guardar en la BDD. </p>


<?php
    
    
    $libro = new Libro(); //crea un nuevo objeto Libro
    
    //pone los valores a las propiedades (vendrían de un formulario)
    $libro->isbn                = uniqid();
    $libro->titulo              = 'A sangre fria'    ;
    $libro->editorial           = 'Anagrama'         ;
    $libro->idioma              = 'Castellano'       ;
    $libro->autor               = 'Truman Capote'    ;
    $libro->edicion             = 5 ;
    $libro->anyo                = '';
    $libro->edadrecomendada     = 18;
    $libro->portada             = '';
    $libro->caracteristicas     = '';
    $libro->sinopsis            = '';
    $libro->paginas             = '';
    
    $libro->save(); //guarda el libro (y se actualiza su ID
    echo "<p>Guardado correctamente con ID: $libro->id</p>";
    
    //recupera el libro desde la BDD para ver si realmente se guardó
    echo Libro::find($libro->id);
    
?>



<!----------------------------- update() ------------------------------>
<h2>Actualiza un libro</h2>
<p>Usamos el método de objeto <code>update()</code>.</p>

<p>Se aplica sobre el objeto de tipo Libro que queremos actualizar en la BDD. </p>

<?php

    //cambiamos algunos datos del libro creado anteriormente
    $libro->titulo = 'To kill a Mockingbird' ;
    $libro->autor  = 'Harper Lee' ;
    
    //actualizamos
    $filasAfectadas = $libro->update();
    
    echo "<p>Actualización correcta de $filasAfectadas registros.</p>";

    //recuperamos de nuevo el libro de la BDD para comprobar los cambios 
    echo Libro::find($libro->id);

?>



<!----------------------------- delete() ------------------------------>
<h2>Borra un libro</h2>
<p>Usamos el método de objeto <code>deleteObject()</code> 
o el método estático <code>delete()</code> .</p>


<?php

    //borramos el libro que acabamos de crear y modificar
    $filasAfectadas = Libro::delete($libro->id);
    
    //usando el método de objeto sería así:
    // $filasAfectadas = $libro->deleteObject();
    
    //comprobamos si ha borrado algo o no
    echo $filasAfectadas === 0 ?
        "<p>No se realizaron cambios.</p>":
        "<p>Borrado correcto de $filasAfectadas registros.</p>";
    
    //comprobamos si existe el libro o no
    echo "<p>".(Libro::find($libro->id) ?? 'NO EXISTE')."</p>";

?>


<!----------------------------- create() ------------------------------>
<h2>Guarda un libro (forma alternativa)</h2>
<p>Usamos el método de objeto <code>create()</code>.</p>


<?php

    $id = Libro::create([
        'isbn'           => uniqid()              ,  //$_POST['isbn']
        'titulo'        => 'El problema final'   ,
        'editorial'     => 'Planeta'             , 
        'autor'         => 'Arturo Pérez-Reverte',
        'edicion'       =>  1
    ]);
    
    echo "<p>Guardado correctamente con ID: $id</p>";
    
    //recupera el titulo desde la BDD para ver si realmente se guardó
    echo "<p>".(Libro::find($id) ?? 'NO EXISTE')."</p>";
    
    //Lo borramos
    Libro::delete($id);
    
    //comprobamos si extiste el libro o no 
    echo "<p>".(Libro::find($id) ?? 'NO EXISTE')."</p>";

?>


<!----------------------------- total() ------------------------------>
<h2>Realiza calculos de totales</h2>
<p>Usamos el método estático <code>total()</code>.</p>


<?php

    echo "<p>Total de libros : ".Libro::total()."</br></p>";
    echo "<p>MIN edicion : ".Libro::total('MIN','edicion')."</br></p>";
    echo "<p>MAX edicion : ".Libro::total('MAX','edicion')."</br></p>";
    echo "<p>AVG edicion : ".Libro::total('AVG','edicion')."</br></p>";

?>


<!----------------------------- groupBy() ------------------------------>
<h2>Realiza cálculos de totales con grupos sobre una única tabla</h2>
<p>Usamos el método estático <code>groupBy()</code>.</p>

<ul>
<?php

    $resultado = Libro::groupBy(['id'=>'COUNT'],['editorial']);
    
    foreach ($resultado as $r)
        echo "<li>$r->editorial : <b>$r->idcount</b></li>";

?>
</ul>
