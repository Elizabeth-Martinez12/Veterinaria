<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/historialMedicoUsuario/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/historialMedicoUsuario/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Historial Medico</h2>
                <label for="nombre">Nombre</label> <!-- Formulario para busqueda --->
                <input type="text" class="form-control" name="nombre">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar"> <!-- Boton para buscar --->
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
                </tr>
            </thead>
            <tbody>
            <?php foreach($historialMedico as $historialMedico):?> <!-- Manda a traer los datos que se requieren buscar--->
                        <tr>
                            <td><a href="<?=base_url('index.php/historialMedico/mostrar/'. $historialMedico->id); ?>"><?=$historialMedico->nombrePaciente ?></td>
                        </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
</div>