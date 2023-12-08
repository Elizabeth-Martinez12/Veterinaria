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
            <form action="<?= base_url('index.php/cliente/buscar/'); ?>" method="GET">
                <a href="<?php echo base_url('index.php/cliente/mostrar'); ?>">
                    <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
                </a>
                <h2>Buscar Consulta</h2>
                <label for="tipoConsulta">Tipo de Consulta</label>
                <input type="text" class="form-control" name="tipoConsulta">
                <label for="nombrePaciente">Nombre de Paciente</label>
                <input type="text" class="form-control" name="nombrePaciente">
                <label for="tipoAnimal">Tipo de Animal</label>
                <input type="text" class="form-control" name="tipoAnimal">
                <label for="nombreDueño">Nombre Dueño</label>
                <input type="text" class="form-control" name="nombreDueño">
                <label for="diaConsulta">Día de Consulta</label>
                <input type="date" class="form-control" name="diaConsulta">
                <label for="horaConsulta">Hora de Consulta</label>
                <input type="time" class="form-control" name="horaConsulta">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>

    <br>

    <?php foreach ($consultas as $consulta): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $consulta->nombrePaciente ?></h5>
                                <p class="card-text">
                                    <strong>Tipo de Consulta:</strong> <?= $consulta->tipoConsulta ?><br>
                                    <strong>Tipo de Animal:</strong> <?= $consulta->tipoAnimal ?><br>
                                    <strong>Dueño:</strong> <?= $consulta->nombreDueño ?><br>
                                    <strong>Veterinario:</strong> <?= $consulta->veterinario ?><br>
                                    <strong>Día de Consulta:</strong> <?= $consulta->diaConsulta ?><br>
                                    <strong>Hora de Consulta:</strong> <?= $consulta->horaConsulta ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
</body>
</html>
