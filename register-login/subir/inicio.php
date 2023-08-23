<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
    <script>
        alert("Debes iniciar sesion");
        window.location = "../rp.php";
    </script>
    ';
  session_destroy();
  die();
  session_destroy();
}

?>
<?php include "../subir/db_conn.php"; ?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Inicio</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    header {
      width: 80px;
      height: 100%;
      position: fixed;
      background-color: rgba(0, 0, 0, 0.80);
    }

    header a {
      text-align: center;
      display: block;
      margin-bottom: 150px;
      margin-left: 15px;
      text-decoration: none;
      color: white;
      width: 50px;
      height: 50px;
      background-color: #4c00ff;
      opacity: 0.7;
      border-radius: 10px;
    }

    .separaciones {
      text-align: center;
      display: block;
      margin-bottom: 150px;
      margin-left: 15px;
      text-decoration: none;
      color: white;
      width: 50px;
      height: 50px;
      background-color: #4c00ff;
      opacity: 0.7;
      border-radius: 10px;
      margin-top: 20px;
    }

    .cuenta {
      margin-top: 220px;

    }

    header img {
      width: 50px;
      height: 50px;
      border-radius: 50px;
    }

    .go {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-left: 20px;
    }

    .go img {
      width: 500px;
      height: 500px;
      border: 9px solid #4c00ff;
    }

    .texto {
      width: 500px;
      height: 50px;
      border: 5px solid #4c00ff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .alb img {
      width: 500px;
      height: 250px;
      border: 5px solid #4c00ff;
    }

    .go h2 {
      font-size: medium;
      color: black;
    }

    .mi-img {
      position: fixed;
      top: 400px;
      left: 85px;
      column-count: 3;
      column-gap: 20px;
      width: 600px;
      height: 150px;
      color: white;
      background-color: grey;
      border: 5px solid #4c00ff;
    }

    .mi-img label {
      margin-bottom: 10px;
      padding: 10px;
    }

    .mi-img input {
      margin-bottom: 10px;
      padding: 10px;
    }

    .mi-img button {
      margin-bottom: 8px;
      padding: 10px;
    }
  </style>


</head>

<body>
  <header>
    <div class="menu">
      <img class="separaciones" src="../assets/images/VSCk_big.jpg" alt="">
      <a class="botones separaciones" href="home"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg></a>
      <a class="botones separaciones" href="chat"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-code" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M8 9h8" />
          <path d="M8 13h6" />
          <path d="M11.012 19.193l-3.012 1.807v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6" />
          <path d="M20 21l2 -2l-2 -2" />
          <path d="M17 17l-2 2l2 2" />
        </svg></a>
      <a class="botones separaciones" href="./upload.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 5l0 14" />
          <path d="M5 12l14 0" />
        </svg></a>
      <a class="botones cuenta" href="cuenta"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg></a>
    </div>
  </header>

  <!--<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">¿Qué puedo hacer?</h4>
            <ul class="list-unstyled">
              <li><a href="../cuenta.php" class="text-white">Cuenta</a></li>
              <li><a href="index.php" class="text-white">Publicar</a></li>
              <li><a href="./chat.php" class="text-white">Chat</a></li>
              <li><a href="../php/cerrar_sesion.php" class="text-white">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>Home</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>-->
  <br>
  <form class="mi-img" action="upload.php" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" accept="image/*" required>
    <br>
    <button type="submit" name="submit">Subir</button>
  </form>
  <main class="go">
    <?php
    // Mostrar todas las imágenes y nombres guardados en la base de datos
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

    // Obtener información de la base de datos
    $sql = "SELECT nombre, image_url FROM imagenes ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<p class='texto'>" . $row['nombre'] . "</p>";
        echo "<img src='" . $row['image_url'] . "' alt='Imagen'><br>";
      }
    } else {
      echo "No se encontraron imágenes.";
    }

    // Cerrar conexión
    ?>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>