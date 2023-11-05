<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $membresia_id = $_POST["membresia"];
    $nuevo_precio = $_POST["nuevo_precio"];

    // Conecta a la base de datos (debes configurar tu conexión)
    $conn = new mysqli("nombre_de_host", "nombre_de_usuario", "contraseña", "nombre_de_base_de_datos");

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Actualiza el precio de la membresía en la base de datos
    $sql = "UPDATE tipos_de_membresia SET precio = $nuevo_precio WHERE id = $membresia_id";

    if ($conn->query($sql) === TRUE) {
        echo "Membresía modificada con éxito.";
    } else {
        echo "Error al modificar la membresía: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
