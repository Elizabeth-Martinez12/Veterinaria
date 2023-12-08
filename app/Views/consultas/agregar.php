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
            <a href="<?php echo base_url('index.php/consultas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Consulta</h2>
            <form action="<?= base_url('index.php/consultas/insert'); ?>" method="POST"> <!-- Metodo para agregrar los datos a la tabla --->
            <?= csrf_field() ?>
                <div class="tipoConsulta"><label for="" class="form-label">Tipo de Consulta</label> <!-- Formulario --->
                <input type="text" class="form-control" name ="tipoConsulta" id="tipoConsultas">
                </div>

                <div class="nombrePaciente"><label for="" class="form-label">Nombre Paciente</label>
                <input type="text" class="form-control" name ="nombrePaciente" id="nombrePaciente">
                </div>

                <div class="tipoAnimal"><label for="" class="form-label">Tipo de Animal</label>
                <input type="text" class="form-control" name ="tipoAnimal" id="tipoAnimal">
                </div>

                <div class="nombreDueño"><label for="" class="form-label">Nombre Dueño</label>
                <input type="text" class="form-control" name ="nombreDueño" id="nombreDueño">
                </div>

                <div class="mb-3"> <!-- Llamado de datos de otra tabla de base de datos con un bucle PHP -->
                <label for="veterinario" class="form-label">Veterinario</label>
                <select name="veterinario" class="form-control">
                        <?php foreach($veterinarios as $veterinario) : ?>
                            <option value="<?=$veterinario->nombre ?>"><?=$veterinario->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="diaConsulta"><label for="" class="form-label">Dia de Consulta</label>
                <input type="date" class="form-control" name ="diaConsulta" id="diaConsulta">
                </div>

                <div class="horaConsulta">
                <label for="" class="form-label">Hora de Consulta</label>
                <input type="time" class="form-control" name="horaConsulta" id="horaConsulta" min="08:00" max="19:00">
                </div>

                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"> <!-- Boton para confirmar --->
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    // Configura la fecha mínima en el campo de fecha
    var today = new Date();
    var minDate = today.toISOString().split('T')[0];
    $('#diaConsulta').attr('min', minDate);

    // Configura los días disponibles excluyendo los domingos
    $('#diaConsulta').change(function() {
        var selectedDate = new Date($(this).val());
        var dayOfWeek = selectedDate.getDay();
        
        if (dayOfWeek === 6) { // Domingo
            alert('Lo sentimos, no se permiten consultas los domingos. Por favor, selecciona otro día.');
            $(this).val('');
        }
    });
});
</script>
