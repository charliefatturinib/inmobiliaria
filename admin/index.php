<?php

require_once "../function/autoload.php";

$secciones_validas = [

  "login" => [
    "titulo" => "Inicio de session"
  ],

  "dashboard" => [
    "titulo" => "Panel de Control"
  ],
  "admin_departamento" => [
    "titulo" => "Administracion de Departamentos"
  ],
  "add_departamento" => [
    "titulo" => "Agregar Departamento"
  ],
  "edit_departamento" => [
    "titulo" => "Editar Departamento"
  ],

  "delete_departamento" => [
    "titulo" => "Eliminar Departamento"
  ],

  "admin_ph" => [
    "titulo" => "Administracion de Ph"
  ],

  "add_ph" => [
    "titulo" => "Agregar Ph"
  ],

  "edit_ph" => [
    "titulo" => "Editar Ph"
  ],

  "delete_ph" => [
    "titulo" => "Eliminar Ph"
  ],

  "admin_casa" => [
    "titulo" => "Administracion de Ph"
  ],

  "add_casa" => [
    "titulo" => "Agregar Casa"
  ],

  "edit_casa" => [
    "titulo" => "Editar Casa"
  ],

  "delete_casa" => [
    "titulo" => "Eliminar Casa"
  ]


];


$seccion = $_GET['sec'] ?? "dashboard";



if (!array_key_exists($seccion, $secciones_validas)) {
  $vista = "404";
  $titulo = "404 - pagina no encontrada";
} else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}

?>


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASB Inmobiliaria <?= $titulo  ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CDN ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Navegacion -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">A-S-B Inmobiliaria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?sec=dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?sec=admin_departamento">Admin de Departamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?sec=admin_ph">Admin de Phs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?sec=admin_casa">Admin de Casas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?sec=login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="actions/auth_logout.php">LogOut</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <?php
    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
    ?>
  </main>






  
  <footer class="bg-secondary">
    <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - CFP20</p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>