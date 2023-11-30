<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Veterinarios</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                <thead>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>CORREO ELECTRONICO</th>
                    <th>TELEFONO</th>
                    <th style="text-align: center" colspan="2">HORARIO</th>
                    <th>ACCIONES</th>
                </thead>
                <tbody>
                <?php foreach($veterinarios as $veterinario):?>
                        <tr>
                            <td><?=$veterinario->nombre ?></td>
                            <td><?=$veterinario->apellidoPaterno ?></td>
                            <td><?=$veterinario->apellidoMaterno ?></td>
                            <td><?=$veterinario->correoElectronico ?></td>
                            <td><?=$veterinario->telefono ?></td>
                            <td><?=$veterinario->hora_inicio ?></td>
                            <td><?=$veterinario->hora_fin ?></td>
                            <td>
                                <a href="<?=base_url('index.php/veterinarios/delete/'. $veterinario->id); ?>"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="40" height="40" /></a>
                                <a href="<?=base_url('index.php/veterinarios/editar/'. $veterinario->id); ?>"><img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="50" height="50" /></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>