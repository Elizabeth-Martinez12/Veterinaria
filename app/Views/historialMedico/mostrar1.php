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
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($historialMedico1 as $historialMedico):?>
                        <tr>
                            <td><a href="<?=base_url('index.php/historialMedico/mostrar/'. $historialMedico->id); ?>"><?=$historialMedico->nombrePaciente ?></td>
                            <td>
                                <a href="<?=base_url('index.php/historialMedico/delete/'. $historialMedico->id); ?>"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="40" height="40" /></a>
                                <a href="<?=base_url('index.php/historialMedico/editar/'. $historialMedico->id); ?>"><img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="45" height="45" /></a>
                            </td>
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
