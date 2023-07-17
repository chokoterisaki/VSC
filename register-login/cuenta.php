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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cuenta.css">
    <title>Cuenta</title>
</head>

<body>
    <header>
        <div class="contenedor_url">
            <a href="ajustes.php" class="ajustes"><img src="assets/images/settings.svg"></a>
            <a href="subir/inicio.php" class="bienvenida"><img src="assets/images/home.svg"></a>
        </div>
    </header>
    <br>
    <!--Usuario-->
    <main class="Users">
        <section class="contenedor_usuario">
            <div class="container_user">
                <img class="user_img" src="assets/images/maxi.jfif">
            </div>
        </section>
        <section>
            <div class="contenedor_name">
                <h2 class="user_name"><?php echo $_SESSION['usuario']; ?></h2>
            </div>
        </section>
    </main>
    <br>
    <!--Mis Publicaciones-->
    <main class="publicaciones"> 
        <section>
            <div class="gallery">
                <h1 class="galeria">Mi Publicaciones</h1>
            </div>
        </section>
    </main>
</body>

</html>