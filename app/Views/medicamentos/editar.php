<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/medicamentos/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar medicamento</h2>
            <form action="<?= base_url('index.php/medicamentos/update'); ?>" method="POST"> <!-- Guarda cambios -->
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $medicamento->id ?>"> <!-- Formulario -->
                <div class="imagen"><label for="imagen" class="form-label">Imagen</label>
                <input type="url" class="form-control" id="imagen" name="imagen" required value="<?= $medicamento->imagen ?>">
                </div>
                <div class="nombre"><label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $medicamento->nombre ?>">
                </div>
                <div class="categoria"><label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $medicamento->categoria ?>">
                </div>
                <div class="cantidad"><label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required value="<?= $medicamento->cantidad ?>">
                </div>
                <div class="precio"><label for="precio" class="form-label">Precio</label>
                <input type="decimal" class="form-control" id="precio" name="precio" required value="<?= $medicamento->precio ?>">
                </div>
                <div class="descripcion"><label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required value="<?= $medicamento->descripcion ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>