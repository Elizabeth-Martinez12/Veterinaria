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

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 40px;
        }

        .box {
            width: calc(30% - 20px);
            margin: 10px;
            padding: 20px;
            border: 1px solid #007bff; /* Cambia el color del borde según tus preferencias */
            border-radius: 10px;
            text-align: center;
            box-sizing: border-box;
            background-color: #d3bcf6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box img {
            max-width: 100%;
            height: 150px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .box-description {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .box-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
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
    <title>Medicamentos</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Medicamentos</h1>
            <a href="<?= base_url('index.php/medicamentos/agregar/'); ?>" class="btn btn-success">Agregar Medicamento</a>
            <br>
            <br>
            <div class="box-container">
            <?php foreach ($medicamentos as $medicamento): ?>
        <div class="box">
            <img src='<?= $medicamento->imagen ?>' alt="Imagen del medicamento">
            <h2><?= $medicamento->nombre ?></h2>
            <p class="box-description"><?= $medicamento->categoria ?></p>
            <p class="box-description"><?= $medicamento->cantidad ?></p>
            <p class="box-description">$<?= $medicamento->precio ?></p>
            <p class="box-description"><?= $medicamento->descripcion ?></p>

            <div class="box-buttons">
                <a href="<?=base_url('index.php/medicamentos/delete/'. $medicamento->id); ?>">
                    <img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" alt="Eliminar" />
                </a>
                <a href="<?=base_url('index.php/medicamentos/editar/'. $medicamento->id); ?>">
                    <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" alt="Editar" />
                </a>
            </div>
        </div>
    <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>


