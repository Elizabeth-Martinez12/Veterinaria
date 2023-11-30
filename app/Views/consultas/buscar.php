<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/consultas/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/consultas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Consulta</h2>
                <label for="tipoConsulta">Tipo de Consulta</label>
                <input type="text" class="form-control" name="tipoConsulta">
                <label for="nombrePaciente">Nombre de Paciente</label>
                <input type="text" class="form-control" name="nombrePaciente">
                <label for="tipoAnimal">Tipo de Animal</label>
                <input type="text" class="form-control" name="tipoAnimal">
                <label for="nombreDueño">Nombre Dueño</label>
                <input type="text" class="form-control" name="nombreDueño">
                <label for="diaConsulta">Dia de Consulta</label>
                <input type="date" class="form-control" name="diaConsulta">
                <label for="horaConsulta">Hora de Consulta</label>
                <input type="time" class="form-control" name="horaConsulta">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($consultas)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>TIPO DE CONSULTA</th>
                            <th>NOMBRE DE PACIENTE</th>
                            <th>TIPO DE ANIMAL</th>
                            <th>NOMBRE DUEÑO</th>
                            <th>VETERINARIO</th>
                            <th>DIA DE CONSULTA</th>
                            <th>HORA DE CONSULTA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($consultas as $consulta):?>
                        <tr>
                            <td><?=$consulta->tipoConsulta ?></td>
                            <td><?=$consulta->nombrePaciente ?></td>
                            <td><?=$consulta->tipoAnimal ?></td>
                            <td><?=$consulta->nombreDueño ?></td>
                            <td><?=$consulta->veterinario ?></td>
                            <td><?=$consulta->diaConsulta ?></td>
                            <td><?=$consulta->horaConsulta ?></td>
                            <td>
                                <a href="<?=base_url('index.php/consultas/delete/'. $consulta->id); ?>"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="40" height="40" /></a>
                                <a href="<?=base_url('index.php/consultas/editar/'. $consulta->id); ?>"><img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="50" height="50" /></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>

        </div>
    </div>
</div>