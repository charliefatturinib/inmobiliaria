<?php
$miObjetoIn = new Inmueble();

$rentas = $miObjetoIn->catalogo_completo();


?>

<h1 class="text-center my-5 ">Todos los comic</h1>

<div class="row">

    <?php if (count($rentas)) {   ?>
        <?php foreach ($rentas as $inmueble) { ?>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/todos/   <?= $inmueble->getPortada() ?>" class="card-img-top" alt="" style="max-height: 350px;">
                    <div class="card-body" style="height:150px;">
                        <p class="fs-6 m-0 fw-bold text-danger"><?= $inmueble->nombre_completo() ?></p>
                        <h5 class="card-title"><?= $inmueble->getTitulo() ?></h5>
                        <p class="card-text"><?= mb_substr($inmueble->getBajada(), 0, 30) ?>...</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Guion: <?= $inmueble->getGuion() ?></li>
                        <li class="list-group-item">Arte: <?= $inmueble->getArte() ?></li>
                        <li class="list-group-item">Publicación: <?= $inmueble->getPublicacion() ?></li>
                    </ul>
                    <div class="card-body">
                        <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $inmueble->getPrecio() ?></p>
                        <a href="index.php?sec=producto&id=<?= $inmueble->getId() ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                    </div>

                </div>
            </div>

        <?php } ?>

    <?php } else { ?>
        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
        </div>
    <?php } ?>
</div>