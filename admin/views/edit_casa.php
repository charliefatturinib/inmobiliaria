<?php
    $id = $_GET['id'] ?? FALSE;

    $inmueble = (new Casa())->get_x_id($id);

?>


<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Editar Casa</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/edit_casa_acc.php?id=<?= $casa->getId()  ?>"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $personaje->getNombre() ?>"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="alias">Alias:</label>
                            <input type="text" class="form-control" name="alias" id="nombre" value="<?= $casa->getAlias() ?>" required>
                        </div>

                        <div class="col-2 mb-3">
                            <label class="form-label" for="imagen">Imagen Actual:</label>
                            <img width="150px" src="../img/personajes/<?= $personaje->getImagen() ?>" alt="" class="img-fluid">
                            <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $personaje->getImagen() ?>">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label" for="imagen">Reemplazar Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="primera_aparicion">Primera Aparicion:</label>
                            <input type="number" class="form-control" name="primera_aparicion" id="primera_aparicion" max="9999" required  value="<?= $personaje->getPrimera_aparicion() ?>">
                            <div class="form-text">Ingresar el año con 4 digitos</div>
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="creador">Creador(es)</label>
                            <input type="text" class="form-control" name="creador" id="creador" value="<?= $personaje->getCreador() ?>"  required>
                            <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="bio">Biografia</label>
                            <textarea name="bio" id="bio" class="form-control"><?= $personaje->getBiografia() ?></textarea>
                          
                        </div>

                        <button type="submit" class="btn btn-warning">Editar Personaje</button>

                        


                </form>  
            </div>
    </div>
</div>