<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
            <a href="<?php echo base_url('index.php/veterinarios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Veterinario</h2>
            <form action="<?= base_url('index.php/veterinarios/insert'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="nombre"><label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name ="nombre" id="nombre">
                </div>

                <div class="apellidoPaterno"><label for="" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name ="apellidoPaterno" id="apellidoPaterno">
                </div>

                <div class="apellidoMaterno"><label for="" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name ="apellidoMaterno" id="apellidoMaterno">
                </div>

                <div class="correoElectronico"><label for="" class="form-label">Correo Electronico</label>
                <input type="text" class="form-control" name ="correoElectronico" id="correoElectronico">
                </div>

                <div class="telefono"><label for="" class="form-label">Telefono</label>
                <input type="number" class="form-control" name ="telefono" id="telefono">
                </div>

                <div class="hora_inicio"><label for="" class="form-label">Hora Inicio</label>
                <input type="time" class="form-control" name ="hora_inicio" id="hora_inicio">
                </div>

                <div class="hora_fin"><label for="" class="form-label">Hora Fin</label>
                <input type="time" class="form-control" name ="hora_fin" id="hora_fin">
                </div>
                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>