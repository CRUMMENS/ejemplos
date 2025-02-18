<h1>Recuperando entidades relacionadas 1 a N</h1>

<?php

    require_once '../config/config.php';  //carga el fichero de configuración
    require_once '../autoload.php';       //usa el autoload
?>


<h2>Recuperando el socio 9</h2>

<?php

    $socio = Socio::findOrFail(9);       
    echo "<p>$socio</p>";

?>


<h2>Préstamos del socio 9</h2>

<ul>
<?php

    $prestamos = $socio->getPrestamos();
    
    foreach ($prestamos as $prestamo)
        echo "<li>$prestamo</li>";

?>
</ul>

