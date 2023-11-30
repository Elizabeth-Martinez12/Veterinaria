<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
        <a href="<?php echo base_url('index.php/consultas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Editar consulta</h2>
            <form action="<?= base_url('index.php/consultas/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $consulta->id ?>">
                <div class="tipoConsulta"><label for="tipoConsulta" class="form-label">Tipo de consulta</label>
                <input type="text" class="form-control" id="tipoConsulta" name="tipoConsulta" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->tipoConsulta ?>">
                </div>
                <div class="nombrePaciente"><label for="nombrePaciente" class="form-label">Nombre Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->nombrePaciente ?>">
                </div>
                <div class="tipoAnimal"><label for="tipoAnimal" class="form-label">Tipo de animal</label>
                <input type="text" class="form-control" id="tipoAnimal" name="tipoAnimal" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->tipoAnimal ?>">
                </div>
                <div class="nombreDueño"><label for="nombreDueño" class="form-label">Nombre Dueño</label>
                <input type="text" class="form-control" id="nombreDueño" name="nombreDueño" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->nombreDueño ?>">
                </div>
                <div class="diaConsulta"><label for="diaConsulta" class="form-label">Dia consulta</label>
                <input type="date" class="form-control" id="diaConsulta" name="diaConsulta" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Ingresa solo letras, sin números ni caracteres especiales" required value="<?= $consulta->diaConsulta ?>">
                </div>
                <div class="horaConsulta"><label for="horaConsulta" class="form-label">Hora consulta</label>
                <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" required value="<?= $consulta->horaConsulta ?>">
                </div>
                <br>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>