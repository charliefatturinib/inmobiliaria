<?php

require_once "../../function/autoload.php";




$id = $_GET['id'] ?? FALSE;

$departamento = (new Departamento())->get_x_id($id);




try {

    if (!empty($departamento->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__ . "/../../img/casas/departamentos" . $departamento->getImagen());
    }

    $departamento->delete();


    header("Location: ../index.php?sec=admin_inmobiliaria");
} catch (\Exception $e) {
    die("No se pudo Eliminar el personaje" .  $e);
}