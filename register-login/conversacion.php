<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Debes iniciar sesion");
        window.location = "rp.php";
    </script>
    ';
    session_destroy();
    die();
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/chat.css">
    <title>Chat</title>
</head>

<body>
    <a href="bienvenida.php">volver</a>
    <form action="chat.php" method="POST">
        <section class="otra_persona">

        </section>
        <section class="conversación">
            <div class="charla">
                <h1 class="enviado">
                    <?php
                    $mensaje = $_POST['texto'];
                    echo $_SESSION['usuario'], "<br>", $mensaje;
                    ?>
                </h1>
            </div>
            <div class="escribir">
                <input type="text" name="texto" class="msj" autocomplete="off">
                <button class="enviar"></button>
            </div>
        </section>

    </form>
</body>

</html>