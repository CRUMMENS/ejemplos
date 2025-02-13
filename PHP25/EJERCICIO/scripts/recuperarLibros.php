<?php
// Asegúrate de tener la conexión a la base de datos establecida aquí
require_once 'config.php';  // Si es necesario incluir la configuración de la base de datos

// Comprobar si se ha recibido el ID por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta para recuperar el libro por ID
    $consulta = $conexion->prepare("SELECT * FROM libros WHERE id = ?");
    $consulta->bind_param("i", $id);  // 'i' indica que el parámetro es un entero
    $consulta->execute();
    $resultado = $consulta->get_result();
    
    // Si encontramos el libro
    if ($libro = $resultado->fetch_object('Libro')) {
        // Retorna el libro (o puedes devolverlo como un objeto en vez de un array si lo prefieres)
        echo json_encode($libro);
    } else {
        echo "Libro no encontrado";
    }
    
    $consulta->close();
} else {
    echo "No se ha recibido un ID válido.";
}

$conexion->close();
?>
