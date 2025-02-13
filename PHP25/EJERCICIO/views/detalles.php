<?php
// Asegúrate de incluir la configuración y la conexión a la base de datos
require_once '../scripts/conectar.php'; // Conexión a la base de datos
require_once '../scripts/recuperarLibro.php';  // Recibe el libro

// Si el libro ha sido recuperado correctamente, lo mostramos
if (isset($libro)) {
    ?>
    <h1>Detalles del libro</h1>
    <p>ISBN:<?php echo $libro->isbn; ?></p>
    <p>Titulo:<?php echo $libro->titulo; ?></p>
    <p>Editorial:<?php echo $libro->editorial; ?></p>
    <p>Idioma:<?php echo $libro->idioma; ?></p>
    <p>Autor:<?php echo $libro->autor; ?></p>
    <p>Edicion:<?php echo $libro->edicion; ?></p>
    <p>Año:<?php echo $libro->anyo; ?></p>
    <p>Edad recomendada: <?php echo $libro->edadrecomendada; ?></p>
    <p>Portada: <?php echo $libro->portada; ?></p>
    <p>Características: <?php echo $libro->caracteristicas; ?></p>
    <p>Sinopsis: <?php echo $libro->sinopsis; ?></p>
    <p>Paginas: <?php echo $libro->paginas; ?></p>
    

    <a href="listado.php">Volver al listado de libros</a>
    <?php
} else {
    echo "<p>El libro solicitado no existe.</p>";
}
?>
