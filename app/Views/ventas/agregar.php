<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Elsie', sans-serif;
            background-color: #f8f9fa; /* Color de fondo */
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #000; /* Color del título */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Añade un contorno al texto */
        }

        form {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #495057; /* Color del texto del label */
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-success {
            background-color: #28a745; /* Color del botón */
            color: #ffffff;
        }
        body {
        font-family: 'Elsie', sans-serif;
        background-color: #f8f9fa; /* Color de fondo de respaldo si la imagen no se carga */
        background-image: url('https://nintendosoup.com/wp-content/uploads/2020/02/animal-crossing-new-horizons-walmart-wallpaper-feb192020-1.jpeg'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        margin: 0; 
        padding: 0; 
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-12">
        <br>
        <a href="<?php echo base_url('index.php/ventas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2 class="text-center mb-4">Agregar Venta</h2>
            <form action="<?= base_url('index.php/ventas/insert'); ?>" method="POST" id="ventaForm">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="1">

                <div class="mb-3"> <!-- Formulario -->
                    <label for="nombre" class="form-label">Nombre</label> <!-- Uso de bucle PHP para llamar datos de otra tabla -->
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
                    <label for="precioTotal" class="form-label">Precio Total</label>
                    <input type="double" class="form-control" name="precioTotal" id="precioTotal" readonly>
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
        var totalInput = document.getElementById("precioTotal");

        var precio = parseFloat(articuloSelect.options[articuloSelect.selectedIndex].getAttribute('data-precio'));
        var cantidad = parseInt(cantidadInput.value);

        if (!isNaN(precio) && !isNaN(cantidad)) {
            var precioTotal = precio * cantidad;
            precioInput.value = precio.toFixed(2);
            totalInput.value = precioTotal.toFixed(2);
        }
    }

    function addToTable() {
        var articuloSelect = document.getElementById("articuloSelect");
        var cantidadInput = document.getElementById("cantidad");
        var precioInput = document.getElementById("precio");
        var totalInput = document.getElementById("precioTotal");

        var nombre = articuloSelect.value;
        var cantidad = cantidadInput.value;
        var precio = precioInput.value;
        var precioTotal = totalInput.value;

        if (nombre && cantidad && precio && precioTotal) {
            var tableBody = document.getElementById("articulosTablaBody");
            var newRow = tableBody.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);

            cell1.innerHTML = nombre;
            cell2.innerHTML = cantidad;
            cell3.innerHTML = precio;
            cell4.innerHTML = precioTotal;

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
