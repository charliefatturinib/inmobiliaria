<?php

    $id = $_GET['id'] ?? FALSE;

    $inmueble  = (new Ph())->renta_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el Ph? <?=  $inmueble->nombre_completo() ?></h1>

        <a href="actions/delete_ph_acc.php?id=<?= $inmueble->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>