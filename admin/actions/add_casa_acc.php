<?php

    require_once "../../function/autoload.php";

    $postData = $_POST;

    $fileData = $_FILES['imagen'];

   /* echo "<pre>";
    print_r($fileData);
    echo "</pre>";

    die(); */

    // echo time();

    /*echo "<pre>";
     print_r($postData);
    echo "</pre>";*/

    try {
        $imagen = (new Imagen())-> subirImagen(__DIR__ . "/../../img/casas/casas" , $fileData);



        (new Casa())->insert(
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
            $imagen,
            $postData['id_casa'],
            $postData['id_departamento'],
            $postData['id_ph']
        
        );

        header("Location: ../index.php?sec=admin_casa");
    } catch (\Exception $e) {
        die("No se pudo cargar el personaje".  $e);
    }




?>