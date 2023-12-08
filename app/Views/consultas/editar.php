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
        <a href="<?php echo base_url('index.php/consultas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar consulta</h2>
            <form action="<?= base_url('index.php/consultas/update'); ?>" method="POST"> <!-- Guardar edicion -->
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $consulta->id ?>"> <!-- Formulario -->
                <div class="tipoConsulta"><label for="tipoConsulta" class="form-label">Tipo de consulta</label>
                <input type="text" class="form-control" id="tipoConsulta" name="tipoConsulta" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->tipoConsulta ?>">
                </div>
                <div class="nombrePaciente"><label for="nombrePaciente" class="form-label">Nombre Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->nombrePaciente ?>">
                </div>
                <div class="tipoAnimal"><label for="tipoAnimal" class="form-label">Tipo de animal</label>
                <input type="text" class="form-control" id="tipoAnimal" name="tipoAnimal" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->tipoAnimal ?>">
                </div>
                <div class="nombreDueño"><label for="nombreDueño" class="form-label">Nombre Dueño</label>
                <input type="text" class="form-control" id="nombreDueño" name="nombreDueño" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->nombreDueño ?>">
                </div>
                <div class="diaConsulta"><label for="diaConsulta" class="form-label">Dia consulta</label>
                <input type="date" class="form-control" id="diaConsulta" name="diaConsulta" required value="<?= $consulta->diaConsulta ?>">
                </div>
                <div class="horaConsulta"><label for="horaConsulta" class="form-label">Hora consulta</label>
                <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" required value="<?= $consulta->horaConsulta ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
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
