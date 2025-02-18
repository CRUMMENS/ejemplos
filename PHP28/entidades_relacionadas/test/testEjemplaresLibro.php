<h1>Recuperando entidades relacionadas 1 a N</h1>

<?php

    require_once '../config/config.php';  //carga el fichero de configuración
    require_once '../autoload.php';       //usa el autoload
?>


<h2>Recuperando el libro 3</h2>

<?php

    $libro = Libro::findOrFail(3);       //recupera el libro 3
    echo "<p>$libro</p>";

?>


<h2>Recuperando ejemplares del libro 3</h2>

<ul>
<?php

    $ejemplares = $libro->getEjemplares();
    
    foreach ($ejemplares as $ejemplar)
        echo "<li>$ejemplar</li>";

?>
</ul>


