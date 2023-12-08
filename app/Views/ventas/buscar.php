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
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #007bff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        form {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-success {
            background-color: #28a745;
            color: #ffffff;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        table {
            margin-top: 30px;
        }

        th, td {
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: #ffffff;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }
        body {
        font-family: 'Elsie', sans-serif;
        background-color: #f8f9fa; /* Color de fondo de respaldo si la imagen no se carga */
        background-image: url('https://w.forfun.com/fetch/bc/bca6586ac9eb79e53f5ae77b7c47292f.jpeg'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        margin: 0; 
        padding: 0; 
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/ventas/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/ventas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Venta</h2> <!-- campos de busqueda -->
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad">
                <label for="precio">Precio</label>
                <input type="double" class="form-control" name="precio">
                <label for="fechaVenta">Fecha de Venta</label>
                <input type="date" class="form-control" name="fechaVenta">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
                <br>
                <br>
            </form>
        </div>
    </div>
    <?php
    if(isset($ventas)){
        
    }
    ?>
    <style>
    .box-buttons {
        display: flex;
        justify-content: space-around;
        margin-top: 20px; /* Aumentado el espacio entre la descripción y los botones */
    }

    .box-buttons a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s;
    }

    .box-buttons a:hover {
        color: #007bff;
    }

    .box-buttons img {
        width: 30px;
        height: 30px;
    }

</style>

<br>
<?php foreach ($ventas as $venta) : ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $venta->nombre ?></h5>
                            <p class="card-text"><strong>Cantidad:</strong> <?= $venta->cantidad ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?= $venta->precio ?></p>
                            <p class="card-text"><strong>Precio Total:</strong> $<?= $venta->precioTotal ?></p>
                            <p class="card-text"><strong>Fecha de Venta:</strong> <?= $venta->fechaVenta ?></p>

                            <div class="box-buttons">
                                <a href="<?= base_url('index.php/ventas/delete/' . $venta->id); ?>">
                                    <img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" alt="Eliminar" width="30" height="30" />
                                </a>
                                <a href="<?= base_url('index.php/ventas/editar/' . $venta->id); ?>">
                                    <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" alt="Editar" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>