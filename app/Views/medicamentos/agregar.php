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
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/medicamentos/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Medicamento</h2>
            <form action="<?= base_url('index.php/medicamentos/insert'); ?>" method="POST"> <!-- Metodo para agregrar los datos a la tabla --->
            <?= csrf_field() ?>
                <div class="imagen"><label for="" class="form-label">Imagen</label> <!-- Formulario --->
                <input type="file" class="form-control" name ="imagen" id="imagen">
                </div>

                <div class="nombre"><label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name ="nombre" id="nombre">
                </div>

                <div class="categoria"><label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control" name ="categoria" id="categoria">
                </div>

                <div class="cantidad"><label for="" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name ="cantidad" id="cantidad">
                </div>

                <div class="precio"><label for="" class="form-label">Precio</label>
                <input type="decimal" class="form-control" name ="precio" id="precio">
                </div>

                <div class="descripcion"><label for="" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name ="descripcion" id="descripcion">
                </div>
                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"> <!-- Boton para confirmar --->
                </div>
            </form>
        </div>
    </div>
</div>