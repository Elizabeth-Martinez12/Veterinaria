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
            <form action="<?=base_url('index.php/historialMedico/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/historialMedico/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Historial Medico</h2>
                <label for="nombre">Nombre</label> <!-- Formulario para busqueda --->
                <input type="text" class="form-control" name="nombre">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar"> <!-- Boton para buscar --->
            </form>
        </div>
    </div>
    <?php
    if(isset($historialMedico)){
        
    }
    ?>
    ¿
            <?php foreach($historialMedico as $historialMedico):?> <!-- Manda a traer los datos que se requieren buscar--->
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= base_url('index.php/historialMedico/mostrar/' . $historialMedico->id); ?>">
                                    <?= $historialMedico->nombrePaciente ?>
                                    <br>
                                </a>
                            </h5>
                            <div class="action-icons">
                                <a href="<?= base_url('index.php/historialMedico/delete/' . $historialMedico->id); ?>">
                                    <img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="30" height="30" alt="Eliminar" />
                                </a>
                                <a href="<?= base_url('index.php/historialMedico/editar/' . $historialMedico->id); ?>">
                                    <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="35" height="35" alt="Editar" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php endforeach ?>
        </div>
    </div>
</div>