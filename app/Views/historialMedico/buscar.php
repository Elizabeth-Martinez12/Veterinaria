<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/historialMedico/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/historialMedico/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Accesorio</h2>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($historialMedico)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
            <thead>
                <tr>
                    <th>NOMBRE DEL PACIENTE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($historialMedico as $historialMedico):?>
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
    </div>
</div>