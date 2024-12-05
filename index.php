<?php

require_once 'function/autoload.php';


$secciones_validas = [
    "home" => [
        "titulo" => ""
    ],
    "sobre_nosotros" => [
        "titulo" => "¿Quienes Somos?"
    ],
    "departamentos" => [
        "titulo" => "Departamentos"
    ],
    "inmobiliaria" => [
        "titulo" => "Nuestros Inmuebles"
    ],
    "renta" => [
        "titulo" => "Detalles de la Renta"
    ],
    "todos" => [
        "titulo" => "Todos los productos"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ]

];

/* operador ternario (if /else) */
/*  $seccion = isset($_GET['sec']) ? $_GET['sec']  : "home"; */

/* Null coalesce ?? (Operador)
    Si una variable esta difinida y no es null la asigna, sino asigna la aternativa
  */



$seccion = $_GET['sec'] ?? "home";


/* Buscar si existe los que viene por sec , y si esta en el array secciones_validas  */

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
    <title>A-S-B Inmobiliaria<?= $titulo  ?></title>

    <link rel="stylesheet" href="css/estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FAVICON -->

  <link rel="icon" href="img/logo/logo.png" type="image/png">

</head>

<body>

    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php?sec=home"> <img width="70" height="50" class="m-1" src="img/logo/logo.png" alt=""></a>
      <a class="navbar-brand" href="index.php">
        <p class="fw-bold fs-4 mt-3 text-warning">A-S-B Inmobiliaria</p>
      </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="index.php?sec=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light"text-light href="index.php?sec=quienes_somos">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=departamentos&">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=comics&pj=2">Casas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=comics&pj=3">Phs</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" >
                            Opciones
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Venta</a></li>
                            <li><a class="dropdown-item" href="#">Alquiler</a></li>
                            <li><a class="dropdown-item" href="#">Compra</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=contacto">Contacto</a>
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


    <!-- FOOTER-->

    <footer style="color: #fff; padding: 20px 0;" class="bg-secondary">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: 0 auto;">

        <!-- Columna 1: Redes Sociales -->
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <h3>Síguenos en:</h3>
        <div style="display: flex; gap: 15px;">
            <a href="https://facebook.com" target="_blank" style="text-decoration: none;">
                <img src="img/iconos redes/facebook.png" alt="Facebook" style="width: 30px; height: 30px;">
            </a>
            <a href="https://twitter.com" target="_blank" style="text-decoration: none;">
                <img src="img/iconos redes/X_logo.jpg" alt="Twitter" style="width: 30px; height: 30px;">
            </a>
            <a href="https://instagram.com" target="_blank" style="text-decoration: none;">
                <img src="img/iconos redes/5968776.png" alt="Instagram" style="width: 30px; height: 30px;">
            </a>
        </div>
        
    </div>

        <!-- Columna 2: Información -->
        <div style="flex: 1; text-align: center;">
            <h3>Información</h3>
            <p>Dirección: Calle Falsa 123</p>
            <p>Teléfono: +123 456 7890</p>
            <p>Email: contacto@ejemplo.com</p>
        </div>
        <!-- Columna 3: Contacto -->
        <div style="flex: 1; text-align: center;">
            <h3>Contáctanos</h3>
            <form method="POST" action="procesar_contacto.php">
                <input type="text" name="nombre" placeholder="Tu nombre" style="margin-bottom: 10px; padding: 5px; width: 80%;"><br>
                <input type="email" name="email" placeholder="Tu email" style="margin-bottom: 10px; padding: 5px; width: 80%;"><br>
                <button type="submit" style="padding: 5px 15px; background: #555; color: #fff; border: none;">Enviar</button>
            </form>
        </div>
    </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>