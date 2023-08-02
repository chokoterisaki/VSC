<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Virtual Software Chat | Inicio</title>
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

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-light bg-light static-top fondo">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/VSCk_big.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            </a>
            <a class="navbar-brand" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Virtual Software Chat</a>

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="../startbootstrap-landing-page-gh-pages-v3/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/soporte.php">Soporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../startbootstrap-landing-page-gh-pages-v3/novedades.php">Novedades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../sobre_nosotros/index.php">Sobre Nosotros</a>
                </li>
            </ul>
            <a class="btn btn-primary" href="../register-login/rp.php">Iniciar Sesión</a>
            <a class="btn btn-primary" href="#">Abrir VSC</a>
            <input class="on-off" type="checkbox" id="switch">
            <label for="switch" class="switch-label"></label>
        </div>
    </nav>



    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Bienvenidos a Virtual Software Chat</h1>
                        <p>VSC es una red social para programadores y desarrolladores, donde podrás resolver tus dudas sobre código, conocer gente con tus gustos,
                            hacer nuevos amigos y comunicarte con programadores.</p>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons fondo1 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3"> <!--PARA LOS ICONOS: con la etiqueta i, buscar en la pagina de bootstrap el icono y a partir de su codigo en su descripcion, ponerlo y agregar los parametro m-auto y text-primary-->
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Publicaciones</h3>
                        <p class="lead mb-0">Publica tus dudas para que la gente te pueda ayudar.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-chat-left-text m-auto text-primary"></i></div>
                        <h3>Chat</h3>
                        <p class="lead mb-0">¡Chatea con tus amigos!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Fácil de usar</h3>
                        <p class="lead mb-0">VSC cuenta con una interfaz fácil e intuitiva de usar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase fondo2">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/chat-online-funil-de-vendas-1024x682.png')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Chats Publicos y Privados</h2> <!--topic 1-->
                    <p class="lead mb-0">En VSC, tendras la opcion de hablar tanto por chats publicos como por chats privados. Los publicos tendran tematicas distintas y tu podras unirte al que mas te guste (Chats de PHP, chats de HTML, etc). <br> Mientras que en los privados puedes hablar individualmente con algun amigo o crear un chat privado con ciertos usuarios para poder hacer proyectos juntos o simplemente hablar entre ustedes. <br>¡Todos podran crear los chats que quieran!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>¿Por que decimos que VSC es una red social de Programacion?</h2> <!--topic 2-->
                    <p class="lead mb-0">Con VSC, aparte de poder encontrar gente con intereses y conocimientos sobre la programacion parecidos a los tuyos, te ayuda con la programacion en general. Por ejemplo, cuando quieras subir un codigo tuyo, ya sea porque quieres preguntar algo o subir un post, VSC adaptara tu codigo al instante con los colores y forma, ¡Solo es necesario poner que lenguaje estas usando y VSC hara todo por ti! Ademas, si quieres escribirlo tu mismo, solo es necesario elegir el lenguaje y ponerte a programar ¡Asi de facil!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/lenguajes-de-programacion-768x438.png')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>¿Y que mas se puede hacer en VSC?</h2> <!--topic 3-->
                    <p class="lead mb-0">¡En VSC puedes hacer muchas cosas! Puedes subir publicaciones con tus codigos favoritos para mostrarle al mundo, hacer preguntas de forma publica para recibir ayuda, ver tutoriales y videos de otrtos usuarios (o subir los tuyos propios) y crear grupos con los que puedes meter a tus amigos para desarrollar algun proyecto o actividad. <br> Y eso es solo la superficie de VSC ¡Hay muchas mas cosas esperandote! ¡Y todo eso completamente gratis! Unete hoy.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center fondo3 ">
        <div class="container">
            <h2 class="mb-5">¿Que opinan nuestros beta testers?</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/avatars-000329792062-ffya5t-t500x500.jpg" alt="..." />
                        <h5>Walter White</h5>
                        <p class="font-weight-light mb-0">"Esta red social es increible! hice muchos amigos"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/500x500fedi.jpg" alt="..." />
                        <h5>Fazbear, Freddy</h5>
                        <p class="font-weight-light mb-0">"No solo puedo aprender programacion si no que tambien puedo subir videos enseñando programacion! wow!!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/Español.jpg" alt="..." />
                        <h5>Gera y Edd (Españoles)</h5>
                        <p class="font-weight-light mb-0">"Hay tantas funciones excelentes y la experiencia es fabulosa! Mejor que Amino"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">¡Únete a nuestra comunidad en constante crecimiento y empieza a programar con amigos ahora mismo!</h2>
                    <!-- Signup form-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->

                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <p>To activate this form, sign up at</p>
                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer fondo4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy;2023 Radio Paris Inc. All Rights Reserved. Please report any glitch or abuse of rules that you may found.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="./js/inicio.js"></script>


</body>

</html>