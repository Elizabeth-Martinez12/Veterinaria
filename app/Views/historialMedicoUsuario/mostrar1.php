<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Nombres de Pacientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1><img src="https://cdn-icons-png.flaticon.com/512/484/484693.png" alt="Historial" width="80" height="80" />Pacientes Registrados</h1>
        <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
            <thead>
                <tr>
                    <th>NOMBRE DEL PACIENTE</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($historialMedico1 as $historialMedico):?> <!-- Llama a los datos con bucle PHP -->
                        <tr>
                            <td><a href="<?=base_url('index.php/historialMedicoUsuario/mostrar/'. $historialMedico->id); ?>"><?=$historialMedico->nombrePaciente ?></td>
                        </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
