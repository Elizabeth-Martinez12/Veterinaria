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
    <title>Historial Medico</title>
</head>
<body>
    <div class="container">
        <h1><img src="https://cdn-icons-png.flaticon.com/512/484/484693.png" alt="Historial" width="80" height="80" /> Pacientes Registrados</h1>
        <a href="<?= base_url('index.php/historialMedicoUsuario/agregar/'); ?>" class="btn btn-success">Agregar Nuevo Historial</a>
            <br>
            <br>
        <div class="row">
            <?php foreach($historialMedico1 as $historialMedico): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= base_url('index.php/historialMedicoUsuario/mostrar/' . $historialMedico->id); ?>">
                                    <?= $historialMedico->nombrePaciente ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
