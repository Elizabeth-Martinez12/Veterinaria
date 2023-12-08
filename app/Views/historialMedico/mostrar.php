<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;700&display=swap">
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

        h1 {
            color: #007bff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .col-md-8 {
            margin-top: 20px;
        }

        h2 {
            color: #007bff;
            margin-top: 30px;
        }

        .table {
            margin-top: 20px;
        }

        .thead-blue {
            background-color: #007bff;
            color: #ffffff;
        }

        th, td {
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }
    </style>
    <title>Vista de Historial Médico</title>
</head>
<body>
    <div class="container mt-5">
        <a href="<?php echo base_url('index.php/historialMedico/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
        </a>
        <h1 class="display-4 text-center mb-4">Historial Médico</h1>
        <?php
            $historialMedic = $historialMedico->id; // Manda a traer 1 por 1 cada registro
            echo '<div class="row">';
            echo '<div class="col-md-4">';
            echo '<img src="' . $historialMedico->imagen . '" alt="Imagen del historial médico">';
            echo '</div>';
            echo '<div class="col-md-8">'; // Funcion para extraer los datos 
            echo "<h2>Número de Registro: " . $historialMedico->id . "</h2>";
            echo "<p>Nombre del Paciente: " . $historialMedico->nombrePaciente . "</p>";
            echo "<p>Tipo de Animal: " . $historialMedico->tipoAnimal . "</p>";
            echo "<p>Nombre del Dueño: " . $historialMedico->nombreDueño . "</p>";
            echo '</div>';
            echo '</div>';
            echo '<h2 class="mt-4">Consultas</h2>';
            echo '<table class="table table-striped table-bordered">';
            echo '<thead class="thead-blue">';
            echo '<tr>';
            echo '<th>Fechas de Consulta</th>';
            echo '<th>Descripción</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $historialMedico->fechasConsultas . '</td>';
            echo '<td>' . $historialMedico->descripcion . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
