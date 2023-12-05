<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
            <a href="<?php echo base_url('index.php/accesorios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Accesorio</h2>
            <form action="<?= base_url('index.php/accesorios/insert'); ?>" method="POST"> <!-- Metodo para agregrar los datos a la tabla --->
            <?= csrf_field() ?>
                <div class="ilustracion"><label for="" class="form-label">Imagen</label> <!-- Formulario --->
                <input type="file" class="form-control" name ="ilustracion" id="ilustracion">
                </div>

                <div class="nombre"><label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name ="nombre" id="nombre">
                </div>

                <div class="cantidad"><label for="" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name ="cantidad" id="cantidad">
                </div>

                <div class="tipo"><label for="" class="form-label">Tipo</label>
                <input type="text" class="form-control" name ="tipo" id="tipo">
                </div>

                <div class="material"><label for="" class="form-label">Material</label>
                <input type="text" class="form-control" name ="material" id="material">
                </div>

                <div class="categoria"><label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control" name ="categoria" id="categoria">
                </div>

                <div class="precio"><label for="" class="form-label">Precio</label>
                <input type="double" class="form-control" name ="precio" id="precio">
                </div>
                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"> <!-- Boton para confirmar --->
                </div>
            </form>
        </div>
    </div>
</div>