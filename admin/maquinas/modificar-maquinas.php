<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];

    // Inserta la máquina en la base de datos
    // (Debes configurar la conexión a la base de datos)
    
    // Redirige de nuevo a la página de administración de máquinas
    header("Location: administrar_maquinas.php");
}

$id = $_GET["id"];

// Recupera los datos de la máquina desde la base de datos y muestra un formulario de edición
// (Debes configurar la conexión a la base de datos)

// Procesa la actualización de la máquina cuando se envía el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevo_nombre = $_POST["nuevo_nombre"];
    $nuevo_estado = $_POST["nuevo_estado"];

    // Actualiza la información de la máquina en la base de datos

    // Redirige de nuevo a la página de administración de máquinas
    header("Location: administrar_maquinas.php");
}
?>