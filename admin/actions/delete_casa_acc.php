<?php

require_once "../../function/autoload.php";




$id = $_GET['id'] ?? FALSE;

$casa = (new Casa())->get_x_id($id);




try {

    if (!empty($casa->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__ . "/../../img/casas/casas" . $casa->getImagen());
    }

    $casa->delete();


    header("Location: ../index.php?sec=admin_inmobiliaria");
} catch (\Exception $e) {
    die("No se pudo Eliminar el personaje" .  $e);
}