<?php


//Cargar Imagen

class Imagen {
    public function subirImagen($directorio, $datosArchivo){
        if(!empty($datosArchivo['tmp_name'])){
            //le vamos a dar un nuevo nombrbe a la imagen
            $og_name = (explode(".", $datosArchivo['name'])); //aca estamos separando ejmplo superman / jpg
            $extension = end($og_name);
            $filename = time() . ".$extension";



            $fileUpload = move_uploaded_file($datosArchivo['tmp_name'], "$directorio/$filename");

            if(!$fileUpload){
                throw new Exception("No se pudo Cargar la Imagen");

            }else{
                return $filename;
            }




        }

    }

    

    //Borrar Imagen

    public function borrarImagen($archivo){
        if(file_exists($archivo)){
            $fileDelete = unlink($archivo);

            if(!$fileDelete){
                throw new Exception("No se pudo Borrar la Imagen");

            }else{
                return TRUE;
            }    
        }else {
            return false;
        }    
    }


}

?>