<?php

require_once "../../function/autoload.php";




$id = $_GET['id'] ?? FALSE;

$ph = (new Ph())->get_x_id($id);




try {

    if (!empty($ph->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__ . "/../../img/personajes/" . $ph->getImagen());
    }

    $ph->delete();


    header("Location: ../index.php?sec=admin_inmobiliaria");
} catch (\Exception $e) {
    die("No se pudo Eliminar el personaje" .  $e);
}