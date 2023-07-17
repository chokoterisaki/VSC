<?php
session_start();
include 'conexion_rp.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'
and contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $usuario;
    header("location: ../subir/inicio.php");
    exit;
} else {
    echo '
    <script>
        alert ("Usuario no existe, verificar los datos introducidos");
        window.location = "../rp.php";
    </script>
    ';
    exit;
}
