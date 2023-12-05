<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
            <a href="<?php echo base_url('index.php/historialMedico/mostrar1'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Historial Medico</h2>
            <form action="<?= base_url('index.php/historialMedico/insert'); ?>" method="POST"> <!-- Metodo para agregrar los datos a la tabla --->
            <?= csrf_field() ?>
                <div class="imagen"><label for="" class="form-label">Imagen:</label> <!-- Formulario --->
                <input type="file" class="form-control" name ="imagen" id="imagen">
                </div>

                <div class="nombrePaciente"><label for="" class="form-label">Nombre Paciente:</label>
                <input type="text" class="form-control" name ="nombrePaciente" id="nombrePaciente">
                </div>

                <div class="tipoAnimal"><label for="" class="form-label">Tipo Animal:</label>
                <input type="text" class="form-control" name ="tipoAnimal" id="tipoAnimal">
                </div>

                <div class="nombreDueño"><label for="" class="form-label">Nombre Dueño:</label>
                <input type="text" class="form-control" name ="nombreDueño" id="nombreDueño">
                </div>

                <div class="descripcion"><label for="" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name ="descripcion" id="descripcion">
                </div>

                <div class="fechasConsultas"><label for="" class="form-label">Fecha de Consultas:</label>
                <input type="date" class="form-control" name ="fechasConsultas" id="fechasConsultas">
                </div>

                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"> <!-- Boton para confirmar --->
                </div>
            </form>
        </div>
    </div>
</div>