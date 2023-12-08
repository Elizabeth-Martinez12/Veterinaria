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
            padding: 10px;
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
    <title>Ventas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Ventas Realizadas</h1>
            <a href="<?= base_url('index.php/ventas/agregar/'); ?>" class="btn btn-success">Agregar Venta</a>
            <br>
            <br>
            <?php
                $totalVentas = 0; // Variable para almacenar la suma total de las ventas
            ?>

            <div class="card-deck">
                <?php foreach ($ventas as $venta) : ?>
                    <div class="card mb-4">
                        <div class="card-body">
                        <?php
                                $subtotal = $venta->cantidad * $venta->precio;
                                $totalVentas += $subtotal;
                            ?>
                            <h5 class="card-title"><?= $venta->nombre ?></h5>
                            <p class="card-text"><strong>Cantidad:</strong> <?= $venta->cantidad ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?= $venta->precio ?></p>
                            <p class="card-text"><strong>Precio Total:</strong> $<?= $venta->precioTotal ?></p>
                            <p class="card-text"><strong>Fecha de Venta:</strong> <?= $venta->fechaVenta ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            
            <div class="text-center mb-4">
                <h1>Total Vendido: $<?= number_format($totalVentas, 2) ?></h1>
            </div>

        </div>
    </div>
</div>
</body>
</html>