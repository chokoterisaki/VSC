<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Virtual Software Chat | Soporte</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> <!--acá iria el favicon de fabri-->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styele2.css">
</head>

<body style="background-color:white" class="fondos">
    <div class="rgb">
        <div style="background-color:white;">
            <nav class="navbar navbar-light bg-light static-top fondos1">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/VSCk_big.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                    </a>
                    <a class="navbar-brand" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Virtual Software Chat</a>

                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../startbootstrap-landing-page-gh-pages-v3/soporte.php">Soporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/novedades.php">Novedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sobre_nosotros/index.php">Sobre Nosotros</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary" href="../register-login/rp.php">Iniciar Sesión</a>
                    <a class="btn btn-primary" href="#">Abrir VSC</a>
                    <input class="on-off" type="checkbox" id="switch">
                    <label for="switch" class="switch-label"></label>
                </div>
            </nav>
        </div>
    </div>
    <section class="contenedor_tarjetas">
        <a href="">
            <div class="forma fondos2">
                <h2 class="texto">Contacto</h2>
                <h4 class="texto">Reporta, sugiere los que descubras</h4>
            </div>
        </a>

        <a href="">
            <div class="forma fondos3">
                <h2 class="texto">Cambiar contraseña</h2>
                <h4 class="texto">¿Olvidaste tu contraseña?</h4>
                <h4 class="texto">Contactanos para cambiarla</h4>
            </div>
        </a>

        <a href="">
            <div class="forma fondos4">
                <h2 class="texto">Solicitud de Administrador</h2>
                <h4 class="texto">Solicita moderar el chat</h4>
            </div>
        </a>
    </section>
    <footer></footer>
    <script>
        var inicio = false;
        var soporte = true;
        var novedades = false;
    </script>
    <script src="./js/switch.js"></script>

</body>

</html>