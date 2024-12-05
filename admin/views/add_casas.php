<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar Nuevo Inmueble</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_casa_acc.php" method="POST" enctype="multipart/form-data">

                <div class="col-6 mb-3">
                    <label class="form-label" for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="venta">venta:</label>
                    <input type="number" class="form-control" name="venta" id="venta" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="barrio">Barrio:</label>
                    <input type="text" class="form-control" name="barrio" id="barrio" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="espacios">Espacios:</label>
                    <input type="text" class="form-control" name="espacios" id="espacios" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="ambientes">Ambientes:</label>
                    <input type="number" class="form-control" name="ambientes" id="ambientes" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="condicion">Condicion:</label>
                    <input type="text" class="form-control" name="condicion" id="condicion" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="imagen">Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">
                </div>

                
            
            
                <button type="submit" class="btn btn-primary">Cargar Inmueble</button>




            </form>
        </div>
    </div>
</div>