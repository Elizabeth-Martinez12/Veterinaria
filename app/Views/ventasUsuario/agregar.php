<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Agregar Venta</h2>
            <form action="<?= base_url('index.php/ventasUsuario/insert'); ?>" method="" id="ventaForm">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="1">

                <div class="mb-3"> <!-- Formulario -->
                    <label for="nombre" class="form-label">Nombre</label> <!-- Uso de bucle PHP para extraer datos de otra tabla -->
                    <select name="nombre" class="form-control" id="articuloSelect" onchange="showConfirmation()">
                        <option value="">Seleccionar Artículo</option>
                        <?php foreach($medicamentos as $medicamento) : ?>
                            <option data-precio="<?= $medicamento->precio ?>" value="<?= $medicamento->nombre ?>">Medicamento: <?= $medicamento->nombre ?></option>
                        <?php endforeach ?>
                        <?php foreach($accesorios as $accesorio) : ?>
                            <option data-precio="<?= $accesorio->precio ?>" value="<?= $accesorio->nombre ?>">Accesorio: <?= $accesorio->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" id="cantidad" onchange="calculateTotal()">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio Unitario</label>
                    <input type="double" class="form-control" name="precio" id="precio" readonly>
                </div>

                <div class="mb-3">
                    <label for="total" class="form-label">Precio Total</label>
                    <input type="double" class="form-control" name="total" id="total" readonly>
                </div>
                <div class="mb-3">
                    <label for="fechaVenta" class="form-label">Fecha de Venta</label>
                    <input type="date" class="form-control" name="fechaVenta" id="fechaVenta" value="<?= date('Y-m-d') ?>" readonly>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-success" onclick="addToTable()">Agregar a la venta</button>
                </div>
                

                <!-- Tabla de artículos seleccionados -->
                <div class="mb-3">
                    <h4>Artículos Seleccionados</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="articulosTablaBody"></tbody>
                    </table>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    function calculateTotal() {
        var articuloSelect = document.getElementById("articuloSelect");
        var cantidadInput = document.getElementById("cantidad");
        var precioInput = document.getElementById("precio");
        var totalInput = document.getElementById("total");

        var precioUnitario = parseFloat(articuloSelect.options[articuloSelect.selectedIndex].getAttribute('data-precio'));
        var cantidad = parseInt(cantidadInput.value);

        if (!isNaN(precioUnitario) && !isNaN(cantidad)) {
            var total = precioUnitario * cantidad;
            precioInput.value = precioUnitario.toFixed(2);
            totalInput.value = total.toFixed(2);
        }
    }

    function addToTable() {
        var articuloSelect = document.getElementById("articuloSelect");
        var cantidadInput = document.getElementById("cantidad");
        var precioInput = document.getElementById("precio");
        var totalInput = document.getElementById("total");

        var nombre = articuloSelect.value;
        var cantidad = cantidadInput.value;
        var precioUnitario = precioInput.value;
        var total = totalInput.value;

        if (nombre && cantidad && precioUnitario && total) {
            var tableBody = document.getElementById("articulosTablaBody");
            var newRow = tableBody.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);

            cell1.innerHTML = nombre;
            cell2.innerHTML = cantidad;
            cell3.innerHTML = precioUnitario;
            cell4.innerHTML = total;

            // Limpiar campos después de agregar a la tabla
            cantidadInput.value = '';
            precioInput.value = '';
            totalInput.value = '';
            articuloSelect.value = '';
            document.getElementById("confirmationBox").style.display = "none";
        } else {
            alert("Complete todos los campos antes de agregar a la venta.");
        }
    }
</script>
