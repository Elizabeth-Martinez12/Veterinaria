<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/historialMedico/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar Historial Medico</h2>
            <form action="<?= base_url('index.php/historialMedico/update'); ?>" method="POST"> <!-- Metodo para agregrar los datos editados a la tabla --->
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $historialMedico->id ?>"> <!-- Funcion para mandar a traer el id del registro a editar --->
                <div class="imagen"><label for="imagen" class="form-label">Imagen</label>
                <input type="url" class="form-control" id="imagen" name="imagen" required value="<?= $historialMedico->imagen ?>"> <!-- Metodo para llamar los datos de la tabla --->
                </div>
                <div class="nombrePaciente"><label for="nombrePaciente" class="form-label">Nombre Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $historialMedico->nombrePaciente ?>">
                </div>
                <div class="tipoAnimal"><label for="tipoAnimal" class="form-label">Tipo de animal</label>
                <input type="text" class="form-control" id="tipoAnimal" name="tipoAnimal" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $historialMedico->tipoAnimal ?>">
                </div>
                <div class="nombreDueño"><label for="nombreDueño" class="form-label">Nombre Dueño</label>
                <input type="text" class="form-control" id="nombreDueño" name="nombreDueño" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $historialMedico->nombreDueño ?>">
                </div>
                <div class="fechasConsultas"><label for="fechasConsultas" class="form-label">Fechas de Consulta</label>
                <input type="date" class="form-control" id="fechasConsultas" name="fechasConsultas" required value="<?= $historialMedico->fechasConsultas ?>">
                </div>
                <div class="descripcion"><label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required value="<?= $historialMedico->descripcion ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"><!-- Boton de guardar cambios --->
                </div>
            </form>
        </div>
    </div>
</div>