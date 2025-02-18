
<?php

    require_once '../config/config.php';  //carga el fichero de configuración
    require_once '../autoload.php';       //usa el autoload
?>

<h2>Recuperando entidades relacionadas N a 1</h2>
<h3>Recorremos la relación al revés, de la entidad del lado N a la entidad del lado 1</h3>

<p> Libro del ejemplar 1</p>

<?php

    $ejemplar = Ejemplar::findOrFail(1);
    echo "<p>$ejemplar</p>";
    
    $libro = $ejemplar->getLibro();
    echo "<p>$libro</p>";
    

?>