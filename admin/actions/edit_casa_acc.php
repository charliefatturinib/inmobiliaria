<?php

    require_once "../../function/autoload.php";

    $postData = $_POST;
    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['imangen'] ?? FALSE;


    try {
        $inmueble = new Casa();

        if(!empty($fileData['tmp_name'])){
            if(!empty($postData['imagen'])){
                (new Imagen())->borrarImagen(__DIR__ . "/../../img/casas/casas" . $postData['portada']);
            }

            $imagen = (new Imagen())-> subirImagen(__DIR__ . "/../../img/casas/casas" , $fileData);

            $inmo->reemplazar_imagen($imagen, $id);

        }

        $inmo->edit(
            $postData['tipo'],
            $postData['venta'],
            $postData['barrio'],
            $postData['calle'],
            $postData['ambientes'],
            $postData['condicion'],
            $postData['orientacion'],
            $postData['terraza'],
            $postData['cochera'],
            $postData['espacios'],
            $postData['id_casa'],
            $postData['id_departamento'],
            $postData['id_ph'],
            $id
);

        header("Location: ../index.php?sec=admin_casa");
    } catch (\Exception $e) {
        die("No se pudo editar la casa".  $e);
    }




?>