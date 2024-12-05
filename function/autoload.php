<?php

function autoloadClases($nombreClase) {
    
    //VARIABBLE magic dir->ruta absoluta -> la carpeta base donde estoy ejecutando

    $archivoClase = __DIR__ . "/../classes" . $nombreClase . ".php";

    if(file_exists($archivoClase)){
        require_once $archivoClase;
    }

}

spl_autoload_register('autoloadClases');