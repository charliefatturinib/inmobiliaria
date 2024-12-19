<?php
// "Quiénes Somos" inmobiliaria
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - ASB Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
    <!-- Banner -->
    <div class="banner bg-danger text-white text-center py-5" style="background: url('banner.jpg') center/cover no-repeat; height: 260px;">
        <h1 class="display-3">Sobre Nosotros</h1>
        <p class="lead">Tu confianza, nuestro compromiso</p>
    </div>

    <div class="container py-5">
        <!-- Introducción -->
        <section class="text-center mb-5">
            <h2 class="mb-4 text-white ">Nuestra Historia</h2>
            <p class="text-white">En Inmobiliaria ASB, llevamos más de 20 años ayudando a las personas a encontrar el lugar perfecto para vivir o invertir. Nuestro equipo está comprometido con ofrecer un servicio personalizado y profesional.</p>
        </section>

        <!-- Cards con información -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/card principal/nuestra mision.jpg" class="card-img-top" alt="Nuestra Misión">
                    <div class="card-body">
                        <h5 class="card-title">Nuestra Misión</h5>
                        <p class="card-text">Facilitar la compra, venta y alquiler de propiedades con transparencia y eficiencia.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/card principal/nuestra vision.jpg" class="card-img-top" alt="Nuestra Visión">
                    <div class="card-body">
                        <h5 class="card-title">Nuestra Visión</h5>
                        <p class="card-text">Ser líderes en el mercado inmobiliario, reconocidos por nuestra calidad y profesionalismo.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/card principal/nuestros valores.jpg" class="card-img-top" alt="Nuestros Valores">
                    <div class="card-body">
                        <h5 class="card-title">Nuestros Valores</h5>
                        <p class="card-text">Integridad, compromiso y dedicación son la base de todas nuestras acciones.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Equipo -->
        <section class="mt-5">
            <h2 class="text-center mb-4">Nuestro Equipo</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="equipo1.jpg" class="card-img-top" alt="Miembro del equipo">
                        <div class="card-body text-center">
                            <h5 class="card-title">Juan Pérez</h5>
                            <p class="card-text">Director General</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="equipo2.jpg" class="card-img-top" alt="Miembro del equipo">
                        <div class="card-body text-center">
                            <h5 class="card-title">María López</h5>
                            <p class="card-text">Gerente de Ventas</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="equipo3.jpg" class="card-img-top" alt="Miembro del equipo">
                        <div class="card-body text-center">
                            <h5 class="card-title">Carlos García</h5>
                            <p class="card-text">Asesor Inmobiliario</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>