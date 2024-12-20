<?php
$inmobiliaria = (new Ph())->catalogo_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administración de Casas</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="15%">Portada</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Venta</th>
                        <th scope="col">Barrio</th>
                        <th scope="col">Calle</th>
                        <th scope="col">Ambientes</th>
                        <th scope="col">Condicion</th>
                        <th scope="col">Orientacion</th>
                        <th scope="col">terraza</th>
                        <th scope="col">Cochera</th>
                        <th scope="col">Espacios</th>
                        <th scope="col">Imagen</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($inmobiliaria as $i){  ?>

                    <tr>
                        <td><img src="../ <?= $i->getPortada() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $i->getTipo() ?></th>
                        <td><?=  $i->getVenta() ?></td>
                        <td><?=  $i->getBarrio() ?></td>
                        <td><?=  $i->getCalle() ?></td>
                        <td><?=  $i->getAmbientes() ?></td>
                        <td><?=  $i->getCondicion() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_casa&id=<?= $i->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_casa&id=<?= $i->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-primary mt-5" href="index.php?sec=add_ph">Cargar Nuevo Casa</a>

        </div>
    </div>

</div>