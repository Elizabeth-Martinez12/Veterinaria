<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/veterinarios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar veterinarios</h2> 
            <form action="<?= base_url('index.php/veterinarios/update'); ?>" method="POST"> <!-- Guarda cambios en base -->
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $veterinarios->id ?>"> <!-- Formulario -->
                <div class="nombre"><label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $veterinarios->nombre ?>">
                </div>
                <div class="apellidoPaterno"><label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $veterinarios->apellidoPaterno ?>">
                </div>
                <div class="apellidoMaterno"><label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $veterinarios->apellidoMaterno ?>">
                </div>
                <div class="correoElectronico"><label for="correoElectronico" class="form-label">Correo Electronico</label>
                <input type="text" class="form-control" id="correoElectronico" name="correoElectronico"  required value="<?= $veterinarios->correoElectronico ?>">
                </div>
                <div class="telefono"><label for="telefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" required value="<?= $veterinarios->telefono ?>">
                </div>
                <div class="hora_inicio"><label for="hora_inicio" class="form-label">Hora Inicio</label>
                <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required value="<?= $veterinarios->hora_inicio ?>">
                </div>
                <div class="hora_fin"><label for="hora_fin" class="form-label">Hora Fin</label>
                <input type="time" class="form-control" id="hora_fin" name="hora_fin" required value="<?= $veterinarios->hora_fin ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>