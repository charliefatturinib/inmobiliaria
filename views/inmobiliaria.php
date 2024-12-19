<?php

$id_departamento = $_GET['in'] ?? FALSE;


$miObjetoIn = new Inmueble();

$rentas = $miObjetoIn->catalogo_x_propiedad($id_departamento);

$departamentoTitulo = (new Departamento())->get_x_id($id_departamento);




/* echo "<pre>";
 var_dump($productos);
echo "</pre>";

die(); */



?>


<div class="row">

    <?php    if(count($rentas))  {   ?> 
    <?php foreach ($rentas as $inmueble) { ?>
    
    <div class="col-3">
        <div class="card mb-3">
            <img src="img/todos/ <?=$inmueble->getImagen() ?>" class="card-img-top" alt="" style="max-height: 350px;">
            <div class="card-body"  style="height:150px;">
                <p class="fs-6 m-0 fw-bold text-danger"><?=$inmueble->getTipo() ?></p>
                <h5 class="card-title"><?=$inmueble->getCondicion() ?></h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Barrio: <?=$inmueble->getBarrio() ?></li>
                <li class="list-group-item">Calle: <?=$inmueble->getCalle() ?></li>
                <li class="list-group-item">Ambientes: <?=$inmueble->getAmbientes() ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$inmueble->getVenta() ?></p>
                <a href="index.php?sec=renta&id=<?= $inmueble->getId() ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>