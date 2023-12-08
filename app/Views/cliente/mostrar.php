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
            background-color: #E4DAC2; /* Cambia el color de fondo de la tarjeta según tus preferencias */
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

    </style>
    <title>Consultas</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Consultas</h1>
            <a href="<?= base_url('index.php/cliente/agregar/'); ?>" class="btn btn-success">Agregar Consulta</a>
            <br>
            <br>
            <div class="row">
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
            </div>

        </div>
    </div>
</div>

</body>
</html>
