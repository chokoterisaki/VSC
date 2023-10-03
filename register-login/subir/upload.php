<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_login_rp";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar formulario si se ha enviado
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $imagenNombre = $_FILES['imagen']['name'];
    $imagenTempPath = $_FILES['imagen']['tmp_name'];

    // Mover imagen a una ubicación permanente
    $imagenDestino = "uploads/" . $imagenNombre;
    move_uploaded_file($imagenTempPath, $imagenDestino);

    // Insertar información en la base de datos
    $sql = "INSERT INTO imagenes (nombre, image_url) VALUES ('$nombre', '$imagenDestino')";
    if ($conn->query($sql) === TRUE) {
        // Redirigir de vuelta a index.html con los parámetros de información
        header("Location: inicio.php?nombre=$nombre&image_url=$imagenDestino");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Redirigir de vuelta a index.html
header("Location: inicio.php");
?>

