<?php
// Cargar configuración y autoload si es necesario
require_once 'config.php';  
require_once 'autoload.php'; 

// Verifica que el ID de libro ha sido pasado por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Cargar el archivo de recuperarLibro
    require_once 'scripts/recuperarLibro.php';

    // Cargar la vista de detalles
    require_once 'views/detalles.php';
} else {
    echo "No se ha recibido un ID válido.";
}
?>
