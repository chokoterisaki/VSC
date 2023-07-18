<?php
/*
session_start();

if(!isset($_SESSION['usuario'])){
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

*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<div class="miniperfil">
  <p>Bienvenido
      <?php
    
    echo $_SESSION['usuario'];

    ?></p>
  <form>
    <button type="submit">Iniciar sesión</button>
  </form>
  <button class="cerrar-sesion">Cerrar sesión</button>
</div>
</body>
</html>