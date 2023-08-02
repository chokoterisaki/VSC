<?php
session_start();

if (isset($_SESSION['usuario'])) {
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Software Chat</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../startbootstrap-landing-page-gh-pages-v3/css/styles.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
<nav class="navbar navbar-light bg-light static-top fondo">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/VSCk_big.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
            </a>
            <a class="navbar-brand" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Virtual Software Chat</a>

            <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/soporte.php">Soporte</a>
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
        </div>
    </nav>
    </nav>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_rp.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" autocomplete="off">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_rp.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" autocomplete="off">
                    <input type="email" placeholder="Correo Electronico" name="correo" autocomplete="off">
                    <input type="text" placeholder="Usuario" name="usuario" autocomplete="off">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button type=submit>Registrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>