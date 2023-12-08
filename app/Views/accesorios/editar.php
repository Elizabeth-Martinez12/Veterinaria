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
        background-image: url('https://i0.wp.com/wokii.com/wp-content/uploads/2021/04/shutterstock-624365147-scaled-e1618226641254.jpg?fit=2048%2C1337&ssl=1'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        margin: 0; 
        padding: 0; 
        }
    </style>
<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/accesorios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar Accesorio</h2>
            <form action="<?= base_url('index.php/accesorios/update'); ?>" method="POST"> <!-- Accion de guardar registros editados -->
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $accesorios->id ?>"> <!-- Formulario -->
                <div class="ilustracion"><label for="ilustracion" class="form-label">Imagen</label>
                <input type="url" class="form-control" id="ilustracion" name="ilustracion" required value="<?= $accesorios->ilustracion ?>">
                </div>
                <div class="nombre"><label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $accesorios->nombre ?>">
                </div>
                <div class="cantidad"><label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required value="<?= $accesorios->cantidad ?>">
                </div>
                <div class="tipo"><label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $accesorios->tipo ?>">
                </div>
                <div class="material"><label for="material" class="form-label">Material</label>
                <input type="text" class="form-control" id="material" name="material" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $accesorios->material ?>">
                </div>
                <div class="categoria"><label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required value="<?= $accesorios->categoria ?>">
                </div>
                <div class="precio"><label for="precio" class="form-label">Precio</label>
                <input type="double" class="form-control" id="precio" name="precio" required value="<?= $accesorios->precio ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>