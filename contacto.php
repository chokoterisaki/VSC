<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    </link>
    <title>Contacto</title>
</head>

<body>
    <header>
        <nav>
            <ul class="lista-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Chats</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Soporte</a>
                </li>
                <li class="contacto">
                    <a href="contacto.php" class="nav-link">Contacto</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Sobre Nosotros</a>
                </li>
            </ul>
        </nav>
    </header><br><br><br><br><br><br>

    <!--El formulario de la página de Contacto-->
    <form id="form contacto" method="post" action="">
        Nombre completo:<br>
        <input type="text" name="nombre" placeholder="Nombre y apellido"><br>
        Correo electrónico:<br>
        <input type="text" name="correo" placeholder="Norreo"><br>
        Elija el motivo de contacto:<br>
        <select>
            <option value="opcion1">Soporte</option>
            <option value="opcion2">Recomendación</option>
        </select><br>
        Comentario:<br>
        <textarea name="comentario" rows="10" cols="60" placeholder="Escriba aquí su comentario"></textarea><br><br>
        <a href="index.html"><input type="button" name="back" value="Volver" /></a>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>

<?php
//Enviar comentario
if (isset($_POST['submit'])) {
    $to = "axelrojogamer@gmail.com"; // este es tu correo
    $from = $_POST['correo']; // este es el correo del usuario que lo envia
    $nombre = $_POST['nombre']; //nombre del usuario
    $comentario = $_POST['comentario']; //el comentario
    $subject = "Formulario de contacto";
    $message = $nombre . " escribió lo siguiente:" . "\n\n" . $comentario;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    echo "Mensaje enviado. ¡Gracias " . $nombre . ", nos pondremos en contacto contigo pronto!";
}
?>