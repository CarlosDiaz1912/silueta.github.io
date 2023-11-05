<?php
$host = "nombre_del_host";
$usuario = "nombre_de_usuario";
$contrasena = "tu_contrasena";
$base_de_datos = "nombre_de_base_de_datos";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nuevo_nombre = $_POST["nuevo_nombre"];
    $nuevo_puesto = $_POST["nuevo_puesto"];

    // Consulta SQL para actualizar la información del personal
    $sql = "UPDATE personal SET nombre = '$nuevo_nombre', puesto = '$nuevo_puesto' WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Información del personal actualizada con éxito.";
    } else {
        echo "Error al actualizar la información del personal: " . $conexion->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nuevo_horario = $_POST["nuevo_horario"];

    // Consulta SQL para actualizar el horario del personal
    $sql = "UPDATE personal SET horario = '$nuevo_horario' WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Horario del personal actualizado con éxito.";
    } else {
        echo "Error al actualizar el horario del personal: " . $conexion->error;
    }
}
$conexion->close();
?>

