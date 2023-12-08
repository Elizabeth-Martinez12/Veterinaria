<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Elsie', sans-serif;
            background-color: #f8f9fa; /* Cambia el color de fondo según tus preferencias */
        }

        .container {
            margin-top: 20px;
        }

        h1 {
        color: #fff; /* Cambia el color del título según tus preferencias */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Añade un contorno al texto */
        }


        .btn-success {
            background-color: #28a745; /* Cambia el color del botón Agregar Consulta según tus preferencias */
            color: #fff; /* Cambia el color del texto del botón según tus preferencias */
        }

        .card {
            border: 1px solid #dee2e6; /* Agrega un borde a las tarjetas */
            border-radius: 20px; /* Añade esquinas redondeadas */
            margin-bottom: 20px;
            background-color: #e0ffff; /* Cambia el color de fondo de la tarjeta según tus preferencias */
        }

        .card-title {
            color: #007bff; /* Cambia el color del título de la tarjeta según tus preferencias */
        }

        .card-body {
            padding: 30px;
        }

        .card-text {
            color: #495057; /* Cambia el color del texto de la tarjeta según tus preferencias */
        }

        .btn-danger,
        .btn-primary {
            margin-top: 10px;
        }
        body {
        font-family: 'Elsie', sans-serif;
        background-color: #f8f9fa; /* Color de fondo de respaldo si la imagen no se carga */
        background-image: url('https://wallpapers.com/images/hd/dark-animals-1920-x-1200-nxztwf6z3jnqzwiv.jpg'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        margin: 0; 
        padding: 0; 
        }

        .buscar-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .buscar-button:hover {
            background-color: #0056b3;
        }

    </style>
    <title>Consultas</title>
</head>
<body>


<div class="container">
    <h1 class="text-center mb-4">Veterinarios</h1>
    <a href="<?= base_url('index.php/veterinarios/agregar/'); ?>" class="btn btn-success">Agregar Veterinario</a>
            <br>
            <br>
    <div class="row">
        <?php foreach ($veterinarios as $veterinario): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $veterinario->nombre . ' ' . $veterinario->apellidoPaterno ?></h5>
                        <p class="card-text">
                            <strong>Correo Electrónico:</strong> <?= $veterinario->correoElectronico ?><br>
                            <strong>Teléfono:</strong> <?= $veterinario->telefono ?><br>
                            <strong>Horario:</strong> <?= $veterinario->hora_inicio . ' - ' . $veterinario->hora_fin ?><br>
                        </p>
                        <div class="text-center">
                            <a href="<?= base_url('index.php/veterinarios/delete/' . $veterinario->id); ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                            <a href="<?= base_url('index.php/veterinarios/editar/' . $veterinario->id); ?>" class="btn btn-primary">
                                Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
