<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Virtual Software Chat | Contacto</title>
  <script src="js/dropdown.js"></script>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> <!--acá iria el favicon de fabri-->
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/VSCk_big.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
      </a>
      <a class="navbar-brand" href="index.html">Virtual Software Chat</a>

      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="soporte.php">Soporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="producto.php">Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../sobre_nosotros/index.php">Sobre Nosotros</a>
        </li>
      </ul>
      <a class="btn btn-primary" href="../register-login/rp.php">Iniciar Sesión</a>
      <a class="btn btn-primary" href="#">Abrir VSC</a>
    </div>
  </nav>
  <section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">¿Tenes alguna duda, sugerencia, o reporte? Por favor, contactanos directamente a través de este formulario.</p>

    <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                <label for="name" class="">Nombre</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control" autocomplete="off">
                <label for="email" class="">Correo Electrónico</label>
              </div>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
          <br> <br>
          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <form>
                  <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <select class="form-control dropdown">
                      <option value="">Selecciona un asunto</option>
                      <option value="duda">Duda</option>
                      <option value="sugerencia">Sugerencia</option>
                      <option value="reporte">Reporte</option>
                    </select>
                  </div>
                </form>
                <br> <br> <br> <br>
              </div>
            </div>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                <label for="message">Your message</label>
              </div>

            </div>
          </div>
          <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
          <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li><i class="fas fa-map-marker-alt fa-2x"></i>
            <p>San Francisco, CA 94126, USA</p>
          </li>

          <li><i class="fas fa-phone mt-4 fa-2x"></i>
            <p>+ 01 234 567 89</p>
          </li>

          <li><i class="fas fa-envelope mt-4 fa-2x"></i>
            <p>contact@mdbootstrap.com</p>
          </li>
        </ul>
      </div>
      <!--Grid column-->

    </div>

  </section>
  <!--Section: Contact v.2-->
  <!-- Footer-->
  <footer class="footer bg-light">
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
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
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
</body>

</html>