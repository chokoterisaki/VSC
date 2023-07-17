<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> <!--acá iria el favicon de fabri-->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="fondo1">
    <div class="rgb">
        <div class="menu">
            <nav class="navbar navbar-light bg-light static-top fondo">
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
                    <button class="btn btn-primary" onclick="Negro()">Tema Oscuro</button>
                    <button class="btn btn-primary" onclick="Blanco()">Tema Claro</button>
                </div>
            </nav>
        </div>
    </div>
    <section class="contenedor_tarjetas">
        <a href="#">
            <div class="forma fondo2">
                <h2 class="texto">Contacto</h2>
                <h4 class="texto">Reporta, sugiere los que descubras</h4>
            </div>
        </a>

        <a href="">
            <div class="forma fondo3">
                <h2 class="texto">Cambiar contraseña</h2>
                <h4 class="texto">¿Olvidaste tu contraseña?</h4>
                <h4 class="texto">Contactanos para cambiarla</h4>
            </div>
        </a>

        <a href="">
            <div class="forma fondo4">
                <h2 class="texto">Solicitud de Administrador</h2>
                <h4 class="texto">Solicita moderar el chat</h4>
            </div>
        </a>
    </section>
    <footer></footer>
</body>

<script>
    var previousBackground = '';

    function Negro() {
        var div = document.getElementsByClassName("fondo")[0];
        var div1 = document.getElementsByClassName("fondo1")[0];
        var div2 = document.getElementsByClassName("fondo2")[0];
        var div3 = document.getElementsByClassName("fondo3")[0];
        var div4 = document.getElementsByClassName("fondo4")[0];


        if (div !== '') {
            previousBackground = div.style.backgroundColor;
            previousBackground = div1.style.backgroundColor;
            previousBackground = div2.style.backgroundColor;
            previousBackground = div3.style.backgroundColor;
            previousBackground = div4.style.backgroundColor;


            previousBackground = div.style.color;
            previousBackground = div1.style.color;
            previousBackground = div2.style.color;
            previousBackground = div3.style.color;
            previousBackground = div4.style.color;

        }
        var newBackground = generateRandomColor();
        div.style.backgroundColor = newBackground;
        div1.style.backgroundColor = newBackground;
        div2.style.backgroundColor = newBackground;
        div3.style.backgroundColor = newBackground;
        div4.style.backgroundColor = newBackground;


        var newBackground2 = generateRandomColor2();
        div.style.color = newBackground2;
        div1.style.color = newBackground2;
        div2.style.color = newBackground2;
        div3.style.color = newBackground2;
        div4.style.color = newBackground2;


        function generateRandomColor() {
            var letters = '363439';
            var color = '#';
            color += letters
            return color;
        }

        function generateRandomColor2() {
            var letter2 = 'FFFFFF'
            var color2 = '#';
            color2 += letter2
            return color2
        }
    }
</script>

<script>
    var previousBackground = '';

    function Blanco() {
        var div = document.getElementsByClassName("fondo")[0];
        var div1 = document.getElementsByClassName("fondo1")[0];
        var div2 = document.getElementsByClassName("fondo2")[0];
        var div3 = document.getElementsByClassName("fondo3")[0];
        var div4 = document.getElementsByClassName("fondo4")[0];


        if (div !== '') {
            previousBackground = div.style.backgroundColor;
            previousBackground = div1.style.backgroundColor;
            previousBackground = div2.style.backgroundColor;
            previousBackground = div3.style.backgroundColor;
            previousBackground = div4.style.backgroundColor;


            previousBackground = div.style.color;
            previousBackground = div1.style.color;
            previousBackground = div2.style.color;
            previousBackground = div3.style.color;
            previousBackground = div4.style.color;

        }
        var newBackground = generateRandomColor();
        div.style.backgroundColor = newBackground;
        div1.style.backgroundColor = newBackground;
        div2.style.backgroundColor = newBackground;
        div3.style.backgroundColor = newBackground;
        div4.style.backgroundColor = newBackground;


        var newBackground2 = generateRandomColor2();
        div.style.color = newBackground2;
        div1.style.color = newBackground2;
        div2.style.color = newBackground2;
        div3.style.color = newBackground2;
        div4.style.color = newBackground2;


        function generateRandomColor() {
            var letters = 'FFFFFF';
            var color = '#';
            color += letters
            return color;
        }

        function generateRandomColor2() {
            var letter2 = '000000'
            var color2 = '#';
            color2 += letter2
            return color2
        }
    }
</script>

</html>