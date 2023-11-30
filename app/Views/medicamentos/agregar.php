<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/medicamentos/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Medicamento</h2>
            <form action="<?= base_url('index.php/medicamentos/insert'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="imagen"><label for="" class="form-label">Imagen</label>
                <input type="url" class="form-control" name ="imagen" id="imagen">
                </div>

                <div class="nombre"><label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name ="nombre" id="nombre">
                </div>

                <div class="categoria"><label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control" name ="categoria" id="categoria">
                </div>

                <div class="cantidad"><label for="" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name ="cantidad" id="cantidad">
                </div>

                <div class="precio"><label for="" class="form-label">Precio</label>
                <input type="decimal" class="form-control" name ="precio" id="precio">
                </div>

                <div class="descripcion"><label for="" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name ="descripcion" id="descripcion">
                </div>
                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>