<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/veterinarios/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/veterinarios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Veterinario</h2> <!-- campos de busqueda -->
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="apellidoPaterno">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoPaterno">
                <label for="apellidoMaterno">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoMaterno">
                <label for="correoElectronico">Correo Electronico</label>
                <input type="text" class="form-control" name="correoElectronico">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" name="telefono">
                <label for="hora_inicio">Hora Inicio</label>
                <input type="time" class="form-control" name="hora_inicio">
                <label for="hora_fin">Hora Fin</label>
                <input type="time" class="form-control" name="hora_fin">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($veterinarios)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered"> <!-- Tabla de contenido -->
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
                <?php foreach($veterinarios as $veterinario):?> <!-- Bucle PHP -->
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