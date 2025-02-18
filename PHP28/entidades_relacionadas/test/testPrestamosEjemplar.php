<h1>Recuperando entidades relacionadas 1 a N</h1>

<?php

    require_once '../config/config.php';  //carga el fichero de configuración
    require_once '../autoload.php';       //usa el autoload
?>

<h2>Todos los préstamos de todos los ejemplares del libro 3</h2>

<?php

    $libro = Libro::findOrFail(3);
    echo "<p>$libro</p>";
    
    $ejemplares = $libro->getEjemplares();
    
    echo "<ul>";
    foreach ($ejemplares as $ejemplar){
        
        echo "<li>$ejemplar";
        
        $prestamos = $ejemplar->getPrestamos();
        
        echo "<ul>";
        
        foreach ($prestamos as $prestamo)
            echo "<li>$prestamo</li>";
            
        echo "</ul>";
        
        echo "</li>";

    }

    echo "</ul>";

?>