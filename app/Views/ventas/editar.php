<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <a href="<?php echo base_url('index.php/ventas/mostrar'); ?>">
                <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar Venta</h2>
            <form action="<?= base_url('index.php/ventas/update'); ?>" method="POST"> <!-- Guarda cambios -->
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= $ventas->id ?>">
                <div class="nombre"> <!-- Formulario -->
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $ventas->nombre ?>">
                </div>
                <div class="cantidad">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" required value="<?= $ventas->cantidad ?>" oninput="updatePrecio()">
                </div>
                <div class="precio">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" required value="<?= $ventas->precio ?>">
                </div>
                <div class="fechaVenta">
                    <label for="fechaVenta" class="form-label">Fecha de venta</label>
                    <input type="date" class="form-control" id="fechaVenta" name="fechaVenta" required value="<?= $ventas->fechaVenta ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function updatePrecio() {
        var cantidadInput = document.getElementById("cantidad");
        var precioInput = document.getElementById("precio");
        var precioUnitario = parseFloat("<?= $ventas->precio ?>"); // Uso de funcion para operaciones y cambios

        if (!isNaN(precioUnitario) && !isNaN(cantidadInput.value)) {
            var total = precioUnitario * parseInt(cantidadInput.value);
            precioInput.value = total.toFixed(2);
        }
    }
</script>
